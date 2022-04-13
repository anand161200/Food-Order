@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="title mt-5"><b>Update profile</b></div>
        <hr>
        <div class="content ">
            <form action="{{ route('upadate_profile') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <div class="user-details">
                    <div class="row g-3">
                        <div class="col">
                            <label for="description" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user_name"
                                value=" {{ Auth::user()->user_name }}" placeholder="Enter your name">
                            <span class="filed_error">
                                @error('user_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col">
                            <label for="description" class="form-label">Firstname</label>
                            <input type="text" class="form-control" name=first_name
                                value="{{ Auth::user()->first_name }}" placeholder="Enter your Firstname">
                            <span class="filed_error">
                                @error('first_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <label for="description" class="form-label">Lastname</label>
                            <input type="text" class="form-control" name=last_name value="{{ Auth::user()->last_name }}"
                                placeholder="Enter your lastname">
                            <span class="filed_error">
                                @error('last_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col">
                            <label for="description" class="form-label">Email</label>
                            <input type="text" class="form-control" name=email value="{{ Auth::user()->email }}"
                                placeholder="Enter your email">
                            <span class="filed_error">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <label for="description" class="form-label">Date_of_birth</label>
                            <input type="date" class="form-control" name=date_of_birth
                                value="{{ Auth::user()->date_of_birth }}" placeholder="Enter your birth">
                            <span class="filed_error">
                                @error('date_of_birth')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col">
                            <label for="description" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" name=contact_number
                                value="{{ Auth::user()->contact_number }}" placeholder="Enter your number">
                            <span class="filed_error">
                                @error('contact_number')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div>


                            <div class="row g-3">
                                <div class="col">
                                    <label for="description" class="form-label">State</label>
                                    <select class="form-select" name="state" value="{{ Auth::user()->state }}"
                                        aria-label="Default select example">
                                        <option value="">Select State</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="uttar_pradesh">uttar pradesh</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                    </select>
                                    <span class="filed_error">
                                        @error('state')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col">
                                    <label for="description" class="form-label">City</label>
                                    <select class="form-select" name="city" value="{{ Auth::user()->city }}"
                                        aria-label="Default select example">
                                        <option value="">Select City</option>
                                        <option value="Ahmedabad">Ahmedabad</option>
                                        <option value="Rajkot">Rajkot</option>
                                        <option value="Surat">Surat</option>
                                    </select>
                                    <span class="filed_error">
                                        @error('city')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>

                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="description" class="form-label">Address</label>
                                            <input type="text" class="form-control" name=address
                                                value="{{ Auth::user()->address }}" placeholder="Enter your Address">
                                            <span class="filed_error">
                                                @error('address')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col">
                                            <label for="description" class="form-label">Zip code</label>
                                            <input type="number" class="form-control" name=Zip_code
                                                value="{{ Auth::user()->Zip_code }}" placeholder="Enter your zip code">
                                            <span class="filed_error">
                                                @error('Zip_code')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="button">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
            </form>
        </div>
    </div>
@endsection
