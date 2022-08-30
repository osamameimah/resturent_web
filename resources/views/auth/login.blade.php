<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
    <base href="/public">

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Login</h3>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div clases="form-group" style="margin-top: 20px;">
                                    <label for="email">Email </label>
                                    <input type="email" class="form-control p_input" name="email"
                                        :value="old('email')" required autofocus>
                                </div>

                                <div class="form-group" style="margin-top: 20px;">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control p_input" name="password" required
                                        autocomplete="current-password">
                                </div>

                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label" for="remember_me">
                                            <input type="checkbox" class="form-check-input"id="remember_me"
                                                name="remember"> Remember me </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="forgot-pass">Forgot
                                            password</a>
                                    @endif

                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                                </div>
                                {{-- <div class="d-flex">
                                    <button class="btn btn-facebook me-2 col">
                                        <i class="mdi mdi-facebook"></i> Facebook </button>
                                    <button class="btn btn-google col">
                                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                                </div> --}}
                                <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset(asset('admin/js/off-canvas.js')) }}"></script>
    <script src="{{ asset(asset('admin/js/hoverable-collapse.js')) }}"></script>
    <script src="{{ asset(asset('admin/js/misc.js')) }}"></script>
    <script src="{{ asset(asset('admin/js/settings.js')) }}"></script>
    <script src="{{ asset(asset('admin/js/todolist.js')) }}"></script>
    <!-- endinject -->
</body>

</html>
