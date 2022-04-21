@extends('layouts.user_layout')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    {{-- @dump($all_cart); --}}

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main text-center table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($all_cart) > 0)
                                    @foreach ($all_cart as $data)
                                        <tr>
                                            <td class="thumbnail-img">
                                                <a href="#">
                                                    <img class="img-fluid"
                                                        src="{{ asset('uploads/foodimage/' . $data->images) }}" alt="" />
                                                </a>
                                            </td>
                                            <td class="name-pr">
                                                <a href="#">
                                                    {{ $data->food_name }}
                                                </a>
                                            </td>
                                            <td class="price-pr">
                                                <p> {{ $data->price }}</p>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <a href="{{ url('update_cart/' . $data->id . '/-1') }}"
                                                        class="btn text-white btn-success {{ $data->quantity <= 1 ? 'disabled' : '' }}">-</a>
                                                    <input type="text" style="width: 15px" class="form-control text-center"
                                                        value="{{ $data->quantity }}" disabled>
                                                    @if ($data->quantity < 10)
                                                        <a href="{{ url('update_cart/' . $data->id . '/1') }}"
                                                            class="btn btn-success text-white">+</a>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="total-pr">
                                                <p>{{ $data->quantity * $data->price }}</p>
                                            </td>
                                            <td class="remove-pr">
                                                <a href="delete_cart/{{ $data->id }}">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> {{ $sub_total->total ?? '0' }} </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="{{ route('Checkout_form') }}"
                        class="ml-auto btn hvr-hover">Checkout</a>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
@endsection
