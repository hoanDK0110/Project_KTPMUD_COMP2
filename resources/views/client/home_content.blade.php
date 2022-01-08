@extends('client_layout')
@section('home-content')
<link rel="stylesheet" href="{{ asset('/public/fontend/css/styleHomeContent.css') }}">
<div class="container-layout">
    <div class="home-menu">
        <div class="home-menu-title">
            <h1>LINH KIỆN & PHỤ KIỆN MÁY TÍNH</h1>
        </div>
        <div class="home-menu-content">
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'laptop') }}">
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/laptop.png') }}" alt="">
                    </div>
                    <div class="home-menu-content-item-name">
                        <span style="color: black;">LAPTOP</span> 
                    </div>
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'cpu') }}">
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/cpu.png') }}" alt="">
                    </div>
                    <div class="home-menu-content-item-name">
                        <span style="color: black;">CPU</span>
                    </div>
                    
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'mainboard') }}">
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/mainboard.png') }}" alt="">
                    </div>
                    <div class="home-menu-content-item-name">
                        <span style="color: black;">MAINBOARD</span>
                    </div>
                    
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'ram') }}"> 
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/RAM.png') }}" alt="">
                    </div>
                    <div class="home-menu-content-item-name">
                        <span style="color: black;">RAM</span>
                    </div>
                    
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'vga') }}">
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/vga.png') }}" alt="">  
                    </div>
                  
                    <div class="home-menu-content-item-name">
                        <span style="color: black;">VGA</span> 
                    </div>
                    
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'hd') }}">
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/hard_drive.png') }}" alt="">
                    </div>
                 
                    <div class="home-menu-content-item-name">
                        <span style="color: black;">Ổ CỨNG</span>
                    </div>
                    
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'psu') }}">
                    <div class="home-menu-content-item-boder">  
                     <img src="{{ asset('/public/fontend/images/icon/psu.png') }}" alt="">
                    </div>
                    <div class="home-menu-content-item-name">
                        <span style="color: black;">NGUỒN - PSU</span>
                    </div>
                    
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'case') }}">
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/case.png') }}" alt="">
                    </div>
                    <div class="home-menu-content-item-name">
                        <span style="color: black;">VỎ CASE</span>
                    </div>
                    
                    
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'monitor') }}">
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/mornitor.png') }}" alt="">
                    </div>
                    <div class="home-menu-content-item-name">
                        <span style="color: black;">MÀN HÌNH</span>
                    </div>
                    
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'cooling') }}"> 
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/cooling.png') }}" alt="">
                    </div>
                    <div class="home-menu-content-item-name"> 
                        <span style="color: black;">TẢN NHIỆT</span>
                    </div>
                   
                </a>
            </div>
            <div class="home-menu-content-item">
                <a href="{{ URL::to('/home/'.'grear') }}"> 
                    <div class="home-menu-content-item-boder">
                        <img src="{{ asset('/public/fontend/images/icon/gaming-gear.png') }}" alt="">
                    </div>
                    <div class="home-menu-content-item-name">
                         <span style="color: black;">PHỤ KIỆN</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
</div>

<div class="container-layout">
    <div class="home-product">
        <div class="home-product-title">
            <p>Laptop - Tính xách tay</p>
        </div>
        <hr>
        <div class="home-product-content">
            @foreach ($product_laptop as $key=>$pro)
                <div class="col-xl-3">
                    <div class="card home-product-content-item">
                        <a href="{{ URL::to('/home/detail-product/'.$pro->product_id) }}"><img class="card-img-top" src="{{ $pro->product_image }}" alt="Card image" style="width:100%"></a>
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


<div class="container-layout">
    <div class="home-product">
        <div class="home-product-title">
            <p>CPU - Vi xử lí</p>
        </div>
        <hr>
        <div class="home-product-content">
            @foreach ($product_cpu as $key=>$pro)
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

<div class="container-layout">
    <div class="home-product">
        <div class="home-product-title">
            <p>Mainboard- Bo mạch chủ</p>
        </div>
        <hr>
        <div class="home-product-content">
            @foreach ($product_mainboard as $key=>$pro)
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


<div class="container-layout">
    <div class="home-product">
        <div class="home-product-title">
            <p>VGA - Card màn hình</p>
        </div>
        <hr>
        <div class="home-product-content">
            @foreach ($product_vga as $key=>$pro)
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

<div class="container-layout">
    <div class="home-product">
        <div class="home-product-title">
            <p>Monitor - Màn hình</p>
        </div>
        <hr>
        <div class="home-product-content">
            @foreach ($product_monitor as $key=>$pro)
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