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
                                                <a class="btn text-white btn-success">-</a>
                                                <input type="text" style="width: 15px" class="form-control text-center"
                                                    value="{{ $data->quantity }}" disabled>
                                                <a href="" class="btn btn-success text-white">+</a>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold"> $ 130 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Discount</h4>
                            <div class="ml-auto font-weight-bold"> $ 40 </div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Coupon Discount</h4>
                            <div class="ml-auto font-weight-bold"> $ 10 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Tax</h4>
                            <div class="ml-auto font-weight-bold"> $ 2 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> $ 388 </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
@endsection