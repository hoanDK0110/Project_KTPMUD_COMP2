@extends('client_layout')
@section('home-content')
<link rel="stylesheet" href="{{ asset('/public/fontend/css/styleDetailProduct2.css') }}">
@foreach ($product as $key=>$pro)
<div class="controll" >
    <h5> 
        <a href="{{ URL::to('/home') }}">Trang chủ</a>
        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
        <a href="{{ URL::to('/home/'.$pro->product_category) }}">{{ $pro->product_category }}</a>
        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
        <a href="{{ URL::to('/client-login') }}">{{ $pro->product_name }}</a>
    </h5>
       
</div>

<div class="container-layout">
    <div class="detail-product-name">
        <h2>{{ $pro->product_name }}</h2>
    </div>
    <hr>
    <div class="detail-content">
        <div class="detail-content-left">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                
                </ul>
              
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ $pro->product_image }}" class="detail-content-left-img">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ $pro->product_imgOther}}" class="detail-content-left-img">
                  </div>
                </div>
              
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span><i class="fas fa-chevron-left text-dark" style="font-size: 24px"></i></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span ><i class="fas fa-chevron-right text-dark" style="font-size: 24px"></i></span>
                </a>
            </div>
        </div>
        <div class="detail-content-right">
            <div class="detail-content-right-infor">
                <h5><strong>Thông tin chung</strong></h5>
                <ul>
                    <li>
                        @php 
                            $details = json_decode($pro->product_details,true);
                        
                        @endphp
                        <strong>
                            <span class="detail-content-right-infor-name">Nhà sản xuất</span>  
                            : 
                            <span class="detail-content-right-infor-value brand">{{ $details['brand'] }}</span> 
                        </strong>
                        
                    </li>
                    <li>
                        <strong>
                            <span class="detail-content-right-infor-name ">Bảo hành</span>  
                            : 
                            <span class="detail-content-right-infor-value text-danger">{{ $pro->product_insurance }}</span> 
                        </strong>
                        
                    </li>
                    <li>
                        <strong>
                            <span class="detail-content-right-infor-name ">Tình trạng</span>  
                            : 
                            <span class="detail-content-right-infor-value text-success">
                                <?php
                                if($pro->product_quantity > 1){

                                
                                ?>
                                <span class="detail-content-right-infor-value text-success">Còn hàng</span> 
                                <?php
                                }else {
                                ?>
                                <span class="detail-content-right-infor-value text-danger">Hết hàng</span> 
                                <?php
                                }
                                ?>
                            
                        </strong>
                        
                    </li>
                </ul>
            </div>
            <hr>
            <div class="detail-content-right-price">
                <table>
                    <tr>
                        <td>Giá bán: </td>
                        <td class="detail-content-right-price-value text-secondary count">{{ number_format(($pro->product_price*110)/100,0,",",".") }}</td>
                    </tr>
                    <tr>
                        <td>Giá khuyến mại : </td>
                        <td class="detail-content-right-price-value discount"><strong>{{ number_format($pro->product_price,0,",",".") }}</strong> <span class="text-danger">(Tiết kiệm {{ number_format($pro->product_price*10/100,0,",",".") }} )</span> </td>
                    </tr>
                </table>
            </div>
            <hr>
            <form action="">
                {{ csrf_field() }}
                <input type="hidden" name="" value="{{ $pro->product_id }}">
                <button type="submit" name="oder" class="btn btn-danger oder"><strong>ĐẶT HÀNG NGAY</strong><br> Giao hàng tận nới nhanh chóng </button>
            </form>
            
            <a href="#" class="btn btn-warning text-white  add_to_cart add-to-cart" data-url="{{ URl::to('/add-to-cart/'.$pro->product_id ) }}"> <strong>THÊM VÀO GIỎ HÀNG</strong> <br> Thêm vào giỏ để chọn tiếp</a>
        </div>
    </div>
    
</div>

<div class="container-layout">

</div>
<div class="container-layout">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#menu1">
            <h4>MÔ TẢ</h4> 
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">
            <h4>THÔNG SỐ KỸ THUẬT</h4>
        </a>
        </li>
        
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="menu1">
            {{ $pro->product_desc }}
        </div>
        <div class="tab-pane container fade" id="menu2">
            {{ $pro->product_spec }}
        </div>
       
    </div>
</div>
@endforeach
@endsection
