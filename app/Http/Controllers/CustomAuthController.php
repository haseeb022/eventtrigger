<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Country;
use App\Models\Event;
use App\Models\Transection;
use Illuminate\Support\Facades\Auth;
use DB;
class CustomAuthController extends Controller
{
    public function index()
    {
        if(Auth::check()==true)
        return redirect()->intended('dashboard');

        return view('login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->user_type==1)
                return redirect()->intended('dashboard')->withSuccess('Signed in');

            return redirect()->intended('/');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        if(Auth::check()){
            return redirect("dashboard");
        }
        $country = Country::get();
        return view('register-user')->with('country', $country);
    }
      
    public function customRegistration(Request $request)
    {  
        
        $request->validate([
            'name' => 'required',
            "contact_number"=> 'required',
            "business_name"=> 'required',
            "user_type"=> 'required',
            "country"=> 'required',
            "city"=> 'required',
            "post_code"=> 'required',
            "address"=> 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
    
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'contact_number' => $data['contact_number'],
        'business_name' => $data['business_name'],
        'user_type' => $data['user_type'],
        'country' => $data['country'],
        'city' => $data['city'],
        'post_code' => $data['post_code'],
        'address' => $data['address'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    { 
        if(Auth::check()){
            if(Auth::user()->user_type==1){
                return view("backend.dashboard");
            }else{
                $id = Auth::user()->id;
                $events = DB::table('users')
                ->leftJoin('transections', 'users.id', '=', 'transections.user_id')
                ->leftJoin('events', 'transections.event_id', '=', 'events.id')
                ->select('events.*')
                ->Where('users.id', $id)->get();
                return view("backend.dashboard-user", compact('events'));
            }
            
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}