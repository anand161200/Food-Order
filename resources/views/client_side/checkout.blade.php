@extends('layouts.user_layout')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        <form class="needs-validation" action="{{ route('store_order') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" name="address" placeholder="Enter your Address">
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <span class="filed_error">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="mb-3">
                                <label for="address2">Contact Number *</label>
                                <input type="text" class="form-control" name="contact_number"
                                    placeholder="Contact Number">
                            </div>
                            <span class="filed_error">
                                @error('contact_number')
                                    {{ $message }}
                                @enderror
                            </span>
                            <hr class="mb-4">
                            <div class="title-left">
                                <h3>Payment</h3>
                            </div>
                            <hr class="mb-4">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" name="Name_of_card"
                                        placeholder="Name on card">
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback"> Name on card is </div>
                                </div>
                                <span class="filed_error">
                                    @error('Name_of_card')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" name="Credit_card_number"
                                        placeholder="Credit card number">
                                    <div class="invalid-feedback"> Credit card number is </div>
                                </div>
                                <span class="filed_error">
                                    @error('Credit_card_number')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" name="Expiration"
                                        placeholder=" Expiration date">
                                    <div class="invalid-feedback"> Expiration date </div>
                                </div>
                                <span class="filed_error">
                                    @error('Expiration')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" name="CVV" placeholder="CVV">
                                    <div class="invalid-feedback"> Security code </div>
                                    <span class="filed_error">
                                        @error('CVV')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid"
                                                    src="{{ asset('user/images/payment-icon/1.png') }}" alt=""></li>
                                            <li><img class="img-fluid"
                                                    src="{{ asset('user/images/payment-icon/2.png') }}" alt=""></li>
                                            <li><img class="img-fluid"
                                                    src="{{ asset('user/images/payment-icon/5.png') }}" alt=""></li>
                                            <li><img class="img-fluid"
                                                    src="{{ asset('user/images/payment-icon/6.png') }}" alt=""></li>
                                            <li><img class="img-fluid"
                                                    src="{{ asset('user/images/payment-icon/7.png') }}" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-1">

                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    @foreach ($all_cart as $item)
                                        <div class="media mb-2 border-bottom">
                                            <div class="media-body"> <a href="detail.html">{{ $item->food_name }}</a>
                                                <div class="small text-muted">{{ $item->price }} <span
                                                        class="mx-2">|</span> Qty: {{ $item->quantity }} <span
                                                        class="mx-2">|</span> Subtotal:
                                                    {{ $item->price * $item->quantity }}</div>
                                            </div>
                                        </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">

                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <input type="hidden" name="amount" value="{{ $sub_total->total ?? '0' }}">
                                    <div class="ml-auto h5"> {{ $sub_total->total ?? '0' }} </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="col-12 d-flex shopping-box">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Place Order</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
@endsection
