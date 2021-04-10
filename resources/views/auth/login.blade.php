<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Melody Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('melody/vendors/iconfonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('melody/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('melody/images/favicon.png')}}"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="../../images/logo.svg" alt="logo">
                        </div>
                        <h4>Welcome Back</h4>
                        <hr>
                        <form class="pt-3" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email"
                                       class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       name="email" id="exampleInputEmail1" placeholder="Username"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus
                                >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       class="form-control form-control-lg @error('password') is-invalid @enderror"
                                       name="password"
                                       id="exampleInputPassword1" placeholder="Password"
                                       required autocomplete="current-password"
                                >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>


                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Keep me signed in
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                                @endif
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
<script src="{{asset('melody/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('melody/vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{asset('melody/js/off-canvas.js')}}"></script>
<script src="{{asset('melody/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('melody/js/misc.js')}}"></script>
<script src="{{asset('melody/js/settings.js')}}"></script>
<script src="{{asset('melody/js/todolist.js')}}"></script>
<!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
</html>
