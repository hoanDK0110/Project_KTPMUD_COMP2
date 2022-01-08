@extends('client_layout')
@section('home-content')

<div class="container-layout">
    <div class="home-product">
        <div class="home-product-title">
            <h2 style="color: #0F5B9A"><strong>Kết quả tìm kiếm "{{ $keywords }}"</strong></h2>
        </div>
        <div style="position: absolute; margin-left:1000px">
            <span>{!! $product->render() !!}</span>
        </div>
        <hr>
        <div class="home-product-content">
            @foreach ($product as $key=>$pro)
                <div class="col-xl-3">
                    <div class="card home-product-content-item">
                        <a href="{{ URL::to('/home/detail-product/'.$pro->product_id) }}"><img class="card-img-top" src="{{ $pro->product_image }}" alt="Card image" style="width:100%; height: 244px;"></a>
                        <div class="card-body">
                            <a href="{{ URL::to('/home/detail-product/'.$pro->product_id) }}"><h6 class="card-text">{{ $pro->product_name }}</h6></a>
                            
                            <h5 class="home-product-content-item-price"><strong>{{ number_format($pro->product_price,0,",",".") }}<sup>đ</sup></strong></h5>
                            <a href="#" class="btn btn-primary add_to_cart" style="margin-left:20px" data-url="{{ URl::to('/add-to-cart/'.$pro->product_id ) }}"> Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> 

@endsection