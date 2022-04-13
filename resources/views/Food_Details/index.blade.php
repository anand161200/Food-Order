@extends('layouts.app')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Food Details</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <a href="{{ route('addfood') }}" class="btn btn-primary">Add Food</a>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @foreach ($fooddata as $category => $menus)
                    <div class="card">


                        <h5 class="card-title ml-2 mt-3">{{ $category }}</h5>
                        <table class="table mt-2">
                            <thead>
                                <tr>
                                    <th scope="col" class="font-weight-bold">#</th>
                                    <th scope="col" class="font-weight-bold">Food Name</th>
                                    <th scope="col" class="font-weight-bold">Description</th>
                                    <th scope="col" class="font-weight-bold">price</th>
                                    <th scope="col" class="font-weight-bold">image</th>
                                    <th scope="col" class="font-weight-bold">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($menus as $menu)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $menu->food_name }}</td>
                                    <td>{{ $menu->description }}</td>
                                    <td>{{ $menu->price }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/foodimage/' . $menu->images) }}" width="70px"
                                            height="70px" alt="images">
                                    </td>
                                    <td>
                                        <a href="edit_food/{{ $menu->id }}" class="btn btn-primary mr-3">Edit</a>
                                        <a href="view_foodDetail/{{ $menu->id }}" class="btn btn-success mr-3">View</a>
                                        <a href="delete_data/{{ $menu->id }}" class="btn btn-danger mr-3">Delete</a>

                                    </td>
                                </tr>
                                @php
                                    $count++;
                                @endphp
                @endforeach
                </tr>
                </tbody>
                </table>

            </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
