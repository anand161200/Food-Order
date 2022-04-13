{{-- @dump($categorydata); --}}
@extends('layouts.app')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Category Details</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <a href="{{ route('add_category') }}" class="btn btn-primary mb-3">Add Category</a>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <table class="table mt-2">
                        <h5 class="card-title ml-2 mt-3">Category</h5>
                        <thead>
                            <tr>
                                <th scope="col" class="font-weight-bold">#</th>
                                <th scope="col" class="font-weight-bold">Category Name</th>
                                <th scope="col" class="font-weight-bold">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($categorydata as $data)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $data->category_name }}</td>
                                <td>
                                    <a href="edit_category/{{ $data->id }}" class="btn btn-primary mr-3">Edit</a>
                                    <a href="delete_category/{{ $data->id }}" class="btn btn-danger mr-3">Delete</a>

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
            </div>
        </div>
    </div>
@endsection
