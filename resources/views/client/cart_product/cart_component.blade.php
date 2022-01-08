<div class="container-layout delete_cart_url" data-url="{{ URL::to('/home/cart/delete-cart')}}">
   
    <div class="title">
        <h1>Thông tin giỏ hàng</h1>
    </div>
    <div class="card-product">
    <table class="table update_cart_url" data-url="{{ URL::to('/home/cart/update-cart') }}" >
        <thead >
            <tr>
                <th>#</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th style="width:100px">Số lượng</th>
                <th>Số tiền</th>
                <th style="width:100px">Thao tác</th>
            </tr>
        </thead>
        
        <tbody>
            @php
            $total_price = 0;
            $stt = 1;
        @endphp
            @if($carts)
                @foreach ($carts as $key => $cart)
                @php
                    $total_price += $cart['price'] * $cart['quantity'];
                @endphp
                <tr>
                    <td><strong>{{ $stt }}</strong></td>
                    <td>
                        <div class="cart-product-info">
                            <div class="cart-product-info-img">
                                <a href="{{ URL::to('/home/detail-product/'.$key) }}"><img src="{{ $cart['image'] }}" alt=""></a>
                                
                            </div>
                            <div class="cart-product-info-name">
                                <a href="{{ URL::to('/home/detail-product/'.$key) }}"><strong>{{ $cart['name']}}</strong></a>
                                
                                <br>
                                <span>Bảo hành: 
                                    <span class="text-danger">{{ $cart['insurance'] }}</span>
                                </span>
                                <br>
                                <span>Kho hàng:
                                    <span class="text-success">{{ $cart['warehouse'] }}</span>
                                </span>
                            </div>
                        </div>
                    </td>
                    <td><strong>{{ number_format($cart['price'],0,",",".") }}<sup>đ</sup></strong></td>
                    <td>x 
                        <input type="number" name="" min="1" max="{{ $cart['warehouse'] }}" value="{{ $cart['quantity'] }}" class="cart-quantity">
                    </td>
                    <td><strong style="color: #dd1313">{{ number_format($cart['price'] * $cart['quantity'],0,",",".") }}<sup>đ</sup></strong></td>

                    <td style="text-align: center;">
                        <a href="" data-id="{{ $key }}" class="cart_update"><i class="far fa-edit" style=" font-size:30px"></i></a>
                        <br>
                        <br>
                        <a href="" data-id="{{ $key }}" class="cart_delete"><i class="far fa-times-circle" style=" font-size:30px"></i></a>
                    </td>
                </tr>
                @php
                    $stt++ 
                @endphp 
                @endforeach
            
            @else

                <div class="alert alert-danger" role="alert" style="padding:10px 0px 5px 250px">
                    <h3>Giỏ hàng đang trống, vui lòng thêm sản phẩm vào giỏ hàng!</h3>
                    
                </div>
                
            
            @endif
            
        </tbody>          
    </table>
    </div>    
</div>

<div class="container-layout">
    <form action="">
    {{ csrf_field() }}
        <div class="cart-info-total">
            <div class="cart-info-customer">
                <div class="cart-info-customer-pay">
                    <div class="cart-info-customer-pay-title">
                        <strong>Thông tin người mua</strong>
                    </div>
                    <div class="cart-info-customer-pay-content">
                        <div style="padding:10px 20px">
                            <span style="font-weight: 700;">Để tiếp tục đặt hàng, quý khách vui lòng nhập đủ thông tin bên dưới</span>
                        </div>
                        
                        <table class="registor-table">
                            <tr>
                                <td class="cart-info-customer-pay-content-title">Email:</td>
                                <td><input type="text" name="user_email" id="" class="cart-info-customer-pay-content-form"></td>
                            </tr>
                            <tr>
                                <td class="cart-info-customer-pay-content-title">Họ và tên:*</td>
                                <td><input type="text" name="user_name" id=""
                                class="cart-info-customer-pay-content-form"></td>
                            </tr>
                            <tr>
                                <td class="cart-info-customer-pay-content-title">Số điện thoại:*</td>
                                <td><input type="text" name="user_phone" id=""
                                class="cart-info-customer-pay-content-form"></td>
                            </tr>
                            <tr>
                                <td class="cart-info-customer-pay-content-title">Giới tính</td>
                                <td>
                                    <input type="radio" name="user_sex" id="" value="Nam" style ="margin-left: 12px;
                                    margin-bottom:12px;" > Nam
                                    <input type="radio" name="user_sex" id="" value="Nữ" style="margin-left: 12px;margin-bottom:12px;"> Nữ
                                </td>
                            </tr>
                            <tr>
                                <td class="cart-info-customer-pay-content-title">Địa chỉ</td>
                                <td><input type="text" name="user_address" id=""
                                class="cart-info-customer-pay-content-form"></td>
                            </tr>
                            <tr>
                                <td>Ghi chú: </td>
                                <td>
                                    <textarea style="resize: none; margin-left: 10px" rows = "8" cols="52"  name="" id="" ></textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cart-total-price">
                <div class="cart-info-customer-pay-title">
                    <strong>Tổng tiền</strong>
                </div>
                <div class="cart-total-price-content">
                    <div class="cart-total-price-content-item">
                        <span>Tổng cộng:</span> 
                        <span style="float: right">{{ number_format($total_price,0,",",".") }}<sup>đ</sup></span>
                    </div>
                    <hr>
                    <div class="cart-total-price-content-item">
                        <span>Thuế GTGT:</span> 
                        <span style="float: right">10%</span> 
                    </div>
                    <hr>
                    <div class="cart-total-price-content-item">
                        <span><strong>Thành tiền:</span> </strong>
                        <span style="font-size: 20px;font-weight: 900;color: #dd1313;float: right">{{ number_format($total_price*110/100,0,",",".") }}</span>
                    </div>
                    <hr>
                    <button type="submit" name="oder" class="btn btn-danger oder" ><strong><i class="fas fa-check"></i> ĐẶT HÀNG NGAY</strong></button>
                </div>
            </div>
        </div>
    </form>
</div>