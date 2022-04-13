@extends('layouts.app')
@section('content')
    <div class="container">
        <h4 class="text-center mt-5"> view </h4>
        <hr>

        <div class="mb-3">
            <label for="food_name" class="form-label">
                <h3><b> food_name:-{{ $user->food_name }} </b></h3>
            </label>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">
                <h3><b>description:-{{ $user->description }}</b></h3>
            </label>

        </div>

        <div class="mb-3">
            <label for="price" class="form-label">
                <h3><b>price:-{{ $user->price }}</b></h3>
            </label>
        </div>
    </div>
@endsection
