@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="{{ route('insert-category') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Add new category</h4>
                            <div class="form-group row">
                                <label for="fname"
                                    class="col-sm-3 text-right control-label col-form-label">category_name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="category_name"
                                        value="{{ old('category_name') }}" placeholder="category name">
                                </div>
                                <span class="filed_error">
                                    @error('category_name')
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
