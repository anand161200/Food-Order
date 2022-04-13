@extends('layouts.app')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Edit food</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit food</li>
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
                    <form class="form-horizontal" action="{{ route('upadate_food') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Add new Food</h4>
                            <input type="hidden" name="id" value="{{ $food_detail->id }}">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Food
                                    Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="food_name"
                                        value="{{ $food_detail->food_name }}" placeholder="food name">
                                </div>

                                <span class="filed_error">
                                    @error('food_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="cono1"
                                    class="col-sm-3 text-right control-label col-form-label">description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description"
                                        placeholder="discription">{{ $food_detail->description }}</textarea>
                                </div>
                                <span class="filed_error">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category" aria-label="Default select example">
                                        <option value="">Select Category</option>

                                        @foreach ($categorydata as $val)
                                            <option value="{{ $val->category_name }}"
                                                {{ $food_detail->category === $val->category_name ? 'selected' : '' }}>
                                                {{ $val->category_name }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <span class="filed_error">
                                        @error('category')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="price"
                                        value="{{ $food_detail->price }}" placeholder="price">
                                </div>
                                <span class="filed_error">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Food
                                    Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="images">
                                    <img src="{{ asset('uploads/foodimage/' . $food_detail->images) }}" width="70px"
                                        height="70px" alt="images">
                                </div>
                                <span class="filed_error">
                                    @error('images')
                                        {{ $message }}
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
