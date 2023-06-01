<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Event Trigger Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('backend/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('backend/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ url('backend/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('backend/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('img/logo-brand.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo" style="text-align: center;">
                <!-- <img src="{{ url('img/logo.png') }}" alt="logo"> -->
                <h2>Event Trigger</h2>
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" action="{{ route('register.custom') }}" method="POST">
                @csrf 
                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-lg" name="name" id="exampleInputUsername1" placeholder="Name" equired autofocus>
                  @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg"  placeholder="Email" equired autofocus>
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <input type="text" name="contact_number" class="form-control form-control-lg"  placeholder="Contact" equired autofocus>
                  @if ($errors->has('contact_number'))
                    <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <input type="text" name="business_name" class="form-control form-control-lg"  placeholder="Business Name" equired autofocus>
                  @if ($errors->has('business_name'))
                    <span class="text-danger">{{ $errors->first('business_name') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <select name="user_type" class="form-control form-control-lg" >
                    <option value="0">User</option>
                    <option value="1">Company</option>
                  </select>
                </div>
                <div class="form-group">
                  <select name="country" class="form-control form-control-lg" >
                    @foreach($country as $c)
                    <option {{$c->id}}>{{$c->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="city" class="form-control form-control-lg"  placeholder="City" equired autofocus> 
                  @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <input type="text" name="post_code" class="form-control form-control-lg"  placeholder="Postal Code" equired autofocus>
                  @if ($errors->has('post_code'))
                    <span class="text-danger">{{ $errors->first('post_code') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <input type="text" name="address" class="form-control form-control-lg"  placeholder="Address" equired autofocus>
                  @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" equired>
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" name="term_condition">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ url('backend/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ url('backend/js/off-canvas.js') }}"></script>
  <script src="{{ url('backend/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('backend/js/template.js') }}"></script>
  <script src="{{ url('backend/js/settings.js') }}"></script>
  <script src="{{ url('backend/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>

</html>
