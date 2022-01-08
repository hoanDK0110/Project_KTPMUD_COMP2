@extends('client_layout')
@section('home-content')
<link rel="stylesheet" href="{{ asset('/public/fontend/css/styleDetailProduct.css') }}">

<div class="controll" >
    <h5> 
        <a href="{{ URL::to('/home') }}">Trang chủ</a>
        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
        <a href="{{ URL::to('/client-login') }}">Laptop</a>
        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
        <a href="{{ URL::to('/client-login') }}">Laptop Gaming Acer Nitro 5 AN515 45 R6EV</a>
    </h5>
       
</div>

<div class="container-layout">
    <div class="title">
        <h2>Laptop Gaming Acer Nitro 5 AN515 45 R6EV</h2>
    </div>
    <hr>
    <div class="detail-content">
        <div class="detail-content-left">
            <img src="{{ asset('/public/fontend/images/icon/laptop.png') }}" alt="">
        </div>
        <div class="detail-content-right">
            <div class="detail-content-right-infor">
                <h5><strong>Thông tin chung</strong></h5>
                <ul>
                    <li>
                        <strong>
                            <span class="detail-content-right-infor-name">Nhà sản xuất</span>  
                            : 
                            <span class="detail-content-right-infor-value brand">ACER</span> 
                        </strong>
                        
                    </li>
                    <li>
                        <strong>
                            <span class="detail-content-right-infor-name ">Bảo hành</span>  
                            : 
                            <span class="detail-content-right-infor-value text-danger">12 Tháng</span> 
                        </strong>
                        
                    </li>
                    <li>
                        <strong>
                            <span class="detail-content-right-infor-name ">Tình trạng</span>  
                            : 
                            <span class="detail-content-right-infor-value text-success">Mới</span> 
                        </strong>
                        
                    </li>
                </ul>
            </div>
            <hr>
            <div class="detail-content-right-price">
                <table>
                    <tr>
                        <td>Giá bán: </td>
                        <td class="detail-content-right-price-value text-secondary count">4.600.000</td>
                    </tr>
                    <tr>
                        <td>Giá khuyến mại : </td>
                        <td class="detail-content-right-price-value discount"><strong>4.090.000</strong> <span class="text-danger">(Tiết kiệm 510.000 )</span> </td>
                    </tr>
                </table>
            </div>
            <hr>
            <button type="submit" class="btn btn-danger"><strong>ĐẶT HÀNG NGAY</strong><br> Giao hàng tận nới nhanh chóng </button>
            <button type="submit" class="btn btn-warning text-white"> <strong>THÊM VÀO GIỎ HÀNG</strong> <br> Thêm vào giỏ để chọn tiếp</button>
        </div>
    </div>
    
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
            <h4>ĐẶC ĐIỂM NỔI BẬT</h4>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu3">
            <h4>THÔNG TIN BẢO HÀNH</h4>
        </a>
        </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="menu1">
            ...
        </div>
        <div class="tab-pane container fade" id="menu2">
            ...
        </div>
        <div class="tab-pane container fade" id="menu3">
            ...
        </div>
    </div>
</div>
@endsection
