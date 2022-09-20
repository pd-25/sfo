
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/medroc/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2022 05:26:21 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg d-flex align-items-center min-vh-100 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="#" class="d-block auth-logo">
                            <img src="https://designd.igiapp.com/sfoblackride/images/resources/logo.png" alt="" height="80" class="logo logo-dark mx-auto">
                            <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="24" class="logo logo-light mx-auto">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="p-4">
                    <div class="card overflow-hidden mt-2">
                        <div class="auth-logo text-center position-relative bg-color">
                            <div class="img-overlay"></div>
                            <div class="position-relative pt-4 py-5 mb-1">
                                <h5 class="text-white">Welcome Back !</h5>
                            <p class="text-white-50 mb-0">Sign in to continue to SFO black ride.</p>
                            </div>
                        </div>
           
                        <div class="card-body position-relative">
                         
                            <div class="p-4 mt-n5 card rounded">
                                @if(Session::has('msg'))
                                <p class="alert alert-info">{{ Session::get('msg') }}</p>
                                @endif
                                @if($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form class="form-horizontal" action="{{route('loggedIn')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Username</label>
                                        <input type="email" class="form-control" id="username" placeholder="Enter Email" name="email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password" required>        
                                    </div>

                                    {{-- <div class="form-check mt-3">
                                        <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                    </div> --}}

                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" name="submit">Log IN</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div>
                                </form>
                               
                            </div>
                        </div>
                    </div>

                    {{-- <div class="mt-5 text-center">
                        <p>Don't have an account ?<a href="auth-register.html" class="fw-bold"> Register</a> </p>
                        <p>© <script>document.write(new Date().getFullYear())</script> Medroc. Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a></p>
                    </div> --}}
                </div>
                </div>
            </div>

        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>

<!-- Mirrored from themesdesign.in/medroc/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2022 05:26:21 GMT -->
</html>