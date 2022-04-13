@extends('layouts.app')
@section('content')
    {{-- <form action="{{ route('insert_data') }}" method="post">
        @csrf
        <div class="container">
            <h4 class="text-center mt-5">Add new food</h4>
            <hr>
            <div class="mb-2">
                <label for="food_name" class="form-label">food_name</label>
                <input type="textar" class="form-control" name="food_name" value="{{ old('food_name') }}"
                    placeholder="Name">

                <span class="filed_error">
                    @error('food_name')
                        {{ $message }}
                    @enderror
            </div>
            <div class="mb-2">
                <label for="description" class="form-label">description</label>
                <textarea row=4 col=40 class="form-control" name="description" value="{{ old('description') }}"
                    placeholder="description"></textarea>
                <span class="filed_error">
                    @error('description')
                        {{ $message }}
                    @enderror
            </div>
            <div class="mb-2">
                <select class="form-select" name="category" aria-label="Default select example">
                    <option value="">Select Category</option>
                    @foreach ($categorydata as $val)
                        <option value="{{ $val->category_name }}">{{ $val->category_name }}</option>
                    @endforeach
                </select>
                <span class="filed_error">
                    @error('category')
                        {{ $message }}
                    @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="price">
                <span class="filed_error">
                    @error('price')
                        {{ $message }}
                    @enderror

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

    </form> --}}

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Basic</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                    <form class="form-horizontal" action="{{ route('insert_data') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Add new Food</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Food
                                    Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="food_name"
                                        value="{{ old('food_name') }}" placeholder="food name">
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
                                    <textarea class="form-control" name="description" value="{{ old('description') }}"
                                        placeholder="discription"></textarea>
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
                                            <option value="{{ $val->category_name }}">{{ $val->category_name }}</option>
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
                                    <input type="text" class="form-control" name="price" value="{{ old('price') }}"
                                        placeholder="price">
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
                                    <input type="file" class="form-control" name="images" value="">
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
