@extends('layouts.app')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Update profile</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="{{ route('upadate_profile') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Upadte Profile</h4>
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="user_name"
                                        value=" {{ Auth::user()->user_name }}" placeholder="Enter your name">
                                </div>
                                <span class="filed_error">
                                    @error('user_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="fname"
                                    class="col-sm-3 text-right control-label col-form-label">Firstname</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="first_name"
                                        value=" {{ Auth::user()->first_name }}" placeholder="Enter your first name">
                                </div>
                                <span class="filed_error">
                                    @error('first_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Lastname</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="last_name"
                                        value=" {{ Auth::user()->last_name }}" placeholder="Enter your Last name">
                                </div>
                                <span class="filed_error">
                                    @error('last_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email"
                                        value="{{ Auth::user()->email }}" placeholder="Enter your Email">
                                </div>
                                <span class="filed_error">
                                    @error('email_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="fname"
                                    class="col-sm-3 text-right control-label col-form-label">Date_of_birth</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date_of_birth"
                                        value="{{ Auth::user()->date_of_birth }}" placeholder="Enter your Date of birth">
                                </div>
                                <span class="filed_error">
                                    @error('date_of_birth')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Contact
                                    Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="contact_number"
                                        value=" {{ Auth::user()->contact_number }}" placeholder="Enter your Conatact">
                                </div>
                                <span class="filed_error">
                                    @error('contact_number')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">State</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="state" aria-label="Default select example">
                                        <option value="">Select state</option>
                                        <option value="Gujarat"
                                            {{ Auth::user()->state === 'Gujarat' ? 'selected' : '' }}>
                                            Gujarat
                                        </option>
                                        <option value="Gujarat"
                                            {{ Auth::user()->state === 'uttar_pradesh' ? 'selected' : '' }}>
                                            Uttar pradesh
                                        </option>
                                        <option value="Rajasthan"
                                            {{ Auth::user()->state === 'Rajasthan' ? 'selected' : '' }}>
                                            Rajasthan
                                        </option>
                                    </select>
                                    <span class="filed_error">
                                        @error('state')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">City</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="city" aria-label="Default select example">
                                        <option value="">Select City</option>
                                        <option value="Ahmedabad"
                                            {{ Auth::user()->city === 'Ahmedabad' ? 'selected' : '' }}>Ahmedabad
                                        </option>
                                        <option value="Rajkot" {{ Auth::user()->city === 'Rajkot' ? 'selected' : '' }}>
                                            Rajkot
                                        </option>
                                        <option value="Surat" {{ Auth::user()->city === 'Surat' ? 'selected' : '' }}>
                                            Surat
                                        </option>
                                    </select>
                                    <span class="filed_error">
                                        @error('city')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address"
                                        value=" {{ Auth::user()->address }}" placeholder="Enter your Address">
                                </div>
                                <span class="filed_error">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Zip_code</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Zip_code"
                                        value=" {{ Auth::user()->Zip_code }}" placeholder="Enter Zip_code">
                                </div>
                                <span class="filed_error">
                                    @error('address')
                                        {{ $Zip_code }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
