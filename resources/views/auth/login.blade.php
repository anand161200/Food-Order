<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon.png') }}">
    <title>Login | Swad Sagar</title>
    <!-- Custom CSS -->
    <link href="{{ asset('/css/style.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper">

        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="{{ asset('/images/logo.png') }}" alt="logo" /></span>
                    </div>
                    @if (Session::has('message'))
                        <span class="text-light">{{ Session::get('message') }}</span>
                    @endif
                    <form action="{{ route('login') }}" method="POST" class="form-horizontal m-t-20" id="loginform">
                        @csrf
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                                class="ti-user"></i></span>
                                    </div>
                                    <input type="text" name="email" class="form-control form-control-lg"
                                        placeholder="Email" aria-label="email" aria-describedby="basic-addon1">

                                </div>
                                <span class="text-light">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="input-group mb-2 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                                <span class="text-light">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group text-center">
                                    <div class="p-t-20">
                                        <button class="btn btn-success mb-3" type="submit">Login</button>
                                        <br>
                                        <span class="text-light">plase register your account ?
                                            <a href="register" class="text-warning">Sign up</a>
                                        </span>
                                        <br>
                                        <div class="mt-5">
                                            <span class="text-white-50 bg-dark">
                                                Developed by Anand Tank ....
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/js/propper/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap/bootstrap.min.js') }}"></script>

    <script>
        $(".preloader").fadeOut();
    </script>

</body>

</html>
