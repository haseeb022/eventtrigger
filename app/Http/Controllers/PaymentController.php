<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Event;
use App\Models\Attendee;
use App\Models\Transection;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{
   
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_SANDBOX_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SANDBOX_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {

        $request->validate([
            'numebr_of_seats' => 'required'
        ]);

        if(!Auth::check()==true){
            return redirect('/login');
        }

        try {
           
            $user_id = Auth::user()->id;
            $event =  Event::find($request->event_id);
            $amount = $event->fee*$request->numebr_of_seats;
           
            $booking = new Attendee();
            $booking->organization_id = $event->organization_id;
            $booking->event_id = $request->event_id;
            $booking->user_id = $user_id;
            $booking->reserve_seats = $request->numebr_of_seats;
            $booking->save();
            session(['booking_id' => $booking->id]);

            $response = $this->gateway->purchase(array(
                'amount' => $amount,
                'currency' => env('PAYPALL_CLIENT_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

            if ($response->isRedirect()) {
                session(['user_id' => $user_id]);
                session(['event_id' => $event->id]);
                
                $response->redirect();
            }
            else{
                return $response->getMessage();
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
     
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $payment = new Transection();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->user_id = session('user_id');
                $payment->user_email = $arr['payer']['payer_info']['email'];
                $payment->booking_id = session('booking_id');
                $payment->event_id = session('event_id');
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPALL_CLIENT_CURRENCY');
                $payment->status = $arr['state'];

                $payment->save();

               // return "Payment is Successfull. Your Transaction Id is : " . $arr['id'];
               return redirect('dashboard');

            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return 'Payment declined!!';
        }
    }

    public function error()
    {
        return 'User declined the payment!';   
    }
}
