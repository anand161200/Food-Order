@extends('layouts.app')
@section('content')
    {{-- @dump($user_contact_list) --}}
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">User contact Details</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
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
                        <h5 class="card-title ml-2 mt-3">User Contact List</h5>
                        <thead>
                            <tr>
                                <th scope="col" class="font-weight-bold">#</th>
                                <th scope="col" class="font-weight-bold">Name</th>
                                <th scope="col" class="font-weight-bold">Email</th>
                                <th scope="col" class="font-weight-bold">Subject</th>
                                <th scope="col" class="font-weight-bold">Message</th>
                                <th scope="col" class="font-weight-bold">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($user_contact_list as $data)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->subject }}</td>
                                <td>{{ $data->message }}</td>
                                <td>
                                    <a href="delete_contact/{{ $data->id }}" class="btn btn-danger mr-3">Delete</a>
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
