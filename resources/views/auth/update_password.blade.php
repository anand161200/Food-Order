@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="{{ route('password_update') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Update Password</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">
                                    Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password"
                                        value="{{ old('password') }}" placeholder="Password">
                                </div>
                                <span class="filed_error">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">
                                    Confirm password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="confirm_password"
                                        value="{{ old('confirm_password') }}" placeholder="Confirm password">
                                </div>
                                <span class="filed_error">
                                    @error('confirm_password')
                                        {{ $message }}
                                    @enderror
                                </span>
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
