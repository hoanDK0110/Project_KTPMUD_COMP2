@extends('client_layout')
@section('home-content')
<link rel="stylesheet" href="{{ asset('/public/fontend/css/styleCart.css') }}">
<div class="controll" >
    <h5> 
        <a href="{{ URL::to('/home') }}">Trang chủ</a>
        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
        <a href="{{ URL::to('/client-login') }}">Giỏ hàng</a>
    </h5> 
</div>

<div class="cart_wrapper">
    @include('client.cart_product.cart_component')
</div>


@endsection