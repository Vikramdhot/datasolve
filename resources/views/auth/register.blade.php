
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>User - Register</title><link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

      <style>
    .left-container{
        background:#3C37FF;
        margin:10px 10px 10px 10px;
        border-radius:10px;
        display:block;
    }



    .logo{
    height: 120px;
    width: 120px;
    margin-left: 36%;
    margin-top: 40px;
    }
    .banner{
    height: 380px;
    margin-top: 80px;
    margin-left: 0%;
    }
    .login-card{
      background:none;
    }


    @media only screen and (max-width: 600px) {

     .left-container{
        background:#3C37FF;
        margin:10px 10px 10px 10px;
        border-radius:10px;
        display:none;
        }

    .login-card .login-main {
    width: auto;
    width: 366px;
    }

    }

    </style>

  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 left-container" >

            <div>

            <!--<img src="/../assets/images/logo.png" class="logo">-->

            </div>


            <div>

            <img src="/../assets/images/register-banner.png" class="banner">


            </div>


        </div>
        <div class="col-xl-5 p-0">
          <div class="login-card">
            <div>
              {{-- <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo2.png" alt="looginpage"></a></div> --}}
              <div class="login-main">
                <form class="theme-form" method="POST" action="{{ route('register') }}">
                        @csrf
                  <h4 class="text-left">Sign up</h4>
                  {{-- <p class="text-center">Enter your email & password to login</p> --}}
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email"  placeholder="Test@gmail.com" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>

                   <div class="form-group">
                    <label class="col-form-label">Phone</label>
                    <input id="phone" class="form-control @error('phone') is-invalid @enderror" type="text"  placeholder="(+91)" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="*********">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-form-label">Confirm Password</label>
                    <div class="form-input position-relative">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="*********">
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">User Role Type</label>
                    <div class="form-input position-relative">
                    <select class="form-select @error('role') is-invalid @enderror" id="role" name="role" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Admin"{{ old('role') === 'Admin' ? ' selected' : '' }}>Admin</option>
                        <option value="Client"{{ old('role') === 'Client' ? ' selected' : '' }}>Client</option>
                        <option value="Employee"{{ old('role') === 'Employee' ? ' selected' : '' }}>Employee</option>
                        
                        
                    </select>
                    @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary btn-block w-100 btn-square" style="border-radius:5px;">
                    Sign up
                                </button>
                      
                    </div>
                  </div>

                  {{-- <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="../assets/js/jquery-3.6.0.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Template js-->
      <script src="../assets/js/script.js"></script>
      <!-- login js-->
    </div>
  </body>

</html>