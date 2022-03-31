<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bahaso">
    <meta name="keyword" content="Bahaso">
    <title>Login</title>
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('app-assets/login/assets/css/al.style.min.css') }}">
    <!-- project layout css file -->
    <link rel="stylesheet" href="{{ asset('app-assets/login/assets/css/layout.a.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>
    <div id="layout-a" class="theme-red">
        <!-- main body area -->
        <div class="main auth-div p-2 py-3 p-xl-5">
            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div style="max-width: 25rem;">
                                <div class="text-center mb-5">
                                    <img src="{{ asset('app-assets/login.png') }}" alt="image" width="100%">
                                </div>

                                <div class="mb-5">
                                    <h3 class="color-900 text-center" style="filter: drop-shadow(2px 0px 0px black);"><b>CMS Article</b></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-4 p-md-5 card border-0" style="max-width: 32rem;">
                                <!-- Form -->
                                <form method="POST" action="{{ route('login.post') }}" class="row g-1 p-0 p-md-4">
                                    @csrf
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="form-label">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    Password
                                                    <a class="text-primary" href="auth-password-reset.html">Lupa Password?</a>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="***************" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Ingat saya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-block btn-dark lift text-uppercase">LOG IN</button>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div> <!-- End Row -->

                </div>
            </div>

            <div class="animate_lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>

        </div>

    </div>
<!-- Jquery Core Js -->
<script src="{{ asset('app-assets/login/assets/bundles/libscripts.bundle.js') }}"></script>
<!-- Jquery Page Js -->
<script src="{{ asset('app-assets/login/assets/js/template.js') }}"></script>
</body>
</html>