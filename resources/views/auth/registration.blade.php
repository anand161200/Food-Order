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
            <div class="auth-box bg-dark border-top border-secondary" style="max-width:700px;">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="{{ asset('/images/logo.png') }}" alt="logo" /></span>
                    </div>
                    <form class="form-horizontal m-t-20" action="{{ route('insert_user') }}" method="POST">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-6">
                                {{-- User name --}}
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                                class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="user_name"
                                        value="{{ old('user_name') }}" placeholder="Username">
                                </div>
                                <span class="text-light">
                                    @error('user_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            {{-- first_name --}}
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                                class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="first_name"
                                        value="{{ old('first_name') }}" placeholder="First name">
                                </div>
                                <span class="text-light">
                                    @error('first_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                                class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="last_name"
                                        value="{{ old('last_name') }}" placeholder="Last name">
                                </div>
                                <span class="text-light">
                                    @error('last_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <!-- email -->
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" pid="basic-addon1"><i
                                                class="ti-email"></i></span>
                                    </div>
                                    <input type="text" name="email" class="form-control form-control-lg"
                                        value="{{ old('email') }}" placeholder="Email Address">
                                </div>
                                <span class="text-light">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i
                                                class="ti-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control form-control-lg" name="date_of_birth"
                                        value="{{ old('date_of_birth') }}" placeholder="Date of Birth">
                                </div>
                                <span class="text-light">
                                    @error('date_of_birth')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i
                                                class="ti-mobile"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="contact_number"
                                        value="{{ old('contact_number') }}" placeholder="Contact">
                                </div>
                                <span class="text-light">
                                    @error('contact_number')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                                class="ti-location-arrow"></i></span>
                                    </div>
                                    <select class="form-control form-control-lg" name="state"
                                        value="{{ old('state') }}" aria-label="Default select example">
                                        <option value="">-- Select State --</option>
                                        <option value="Gujarat" {{ old('state') === 'Gujarat' ? 'selected' : '' }}>
                                            Gujarat</option>
                                        <option value="uttar_pradesh"
                                            {{ old('state') === 'uttar_pradesh' ? 'selected' : '' }}>uttar pradesh
                                        </option>
                                        <option value="Rajasthan"
                                            {{ old('state') === 'Rajasthan' ? 'selected' : '' }}>
                                            Rajasthan</option>
                                    </select>
                                </div>
                                <span class="text-light">
                                    @error('state')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                                class="ti-location-arrow"></i></span>
                                    </div>
                                    <select class="form-control form-control-lg" name="city"
                                        aria-label="Default select example">
                                        <option value="">-- Select City --</option>
                                        <option value="Ahmedabad"
                                            {{ old('city') === 'Ahmedabad' ? 'selected' : '' }}>Ahmedabad</option>
                                        <option value="Rajkot" {{ old('city') === 'Rajkot' ? 'selected' : '' }}>
                                            Rajkot
                                        </option>
                                        <option value="Surat" {{ old('city') === 'Surat' ? 'selected' : '' }}>Surat
                                        </option>
                                    </select>
                                </div>
                                <span class="text-light"> @error('city')
                                        {{ $message }}
                                    @enderror </span>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                                class="ti-location-arrow"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="address"
                                        value="{{ old('address') }}" placeholder="Enter your Address">
                                </div>
                                <span class="text-light">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                                class="ti-location-arrow"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="Zip_code"
                                        value="{{ old('Zip_code') }}" placeholder="Zip code">
                                </div>
                                <span class="text-light">
                                    @error('Zip_code')
                                        {{ $message }}
                                    @enderror
                                </span>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        placeholder="Password">
                                </div>
                                <span class="text-light">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" name="confirm_password"
                                        placeholder=" Confirm Password">
                                </div>
                                <span class="text-light">
                                    @error('confirm_password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                </div>
                <div class="row border-top border-secondary">
                    <div class="col-12">
                        <div class="form-group text-center">
                            <div class="p-t-20">
                                <button class="btn btn-success mb-3" type="submit">Sign Up</button>
                                <br>
                                <span class="text-light"> Already have a account ?
                                    <a href="login" class="text-warning">Sign In</a>
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
