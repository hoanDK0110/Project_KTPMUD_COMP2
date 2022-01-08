@extends('client_layout')
@section('home-content')
<link rel="stylesheet" href="{{ asset('/public/fontend/css/styleBuiltPC.css') }}">
<div class="controll" >
    <h5> 
        <a href="{{ URL::to('/home') }}">Trang chủ</a>
        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
        <a href="{{ URL::to('/client-login') }}">Xây dựng cấu hình</a>
    </h5> 
</div>
<div class="container-layout">
    <div class="title">
        <h1>Chọn linh kiện xây dựng cấu hình</h1>
    </div>
    
    <button type="reset" class="btn btn-primary registor-content-submit" style="margin: 15px 0px 20px 25px">Làm mới <i class="fas fa-undo-alt" style="color: white; "></i></button>
    <span style="float:right; font-size:18px; color:#d00; margin:20px 20px;">Tổng chi phí: 5.040.000 đ</span>
   
    
    <div class="built-pc-items">
        <table class="table table-bordered" >
            <tr style="background-color: #f9f9f9">
                <th class="built-pc-item-name">1. CPU - Vi xử lý</th>
                <td>
                    <input type="button" class="btn btn-primary" name="submit" id="choose-cpu" value="Chọn CPU - Vi xử lý">
                </td>
            </tr>
            <tr>
                <th class="built-pc-item-name">2. Main - Bo mạch chủ</th>
                <th>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-plus"> Chọn Main - Bo mạch chủ</i>
                    </button>
            </th>
            </tr>
            <tr class="background" style="background-color: #f9f9f9">
                <th class="built-pc-item-name">3. Ram - Bộ nhớ trong</th>
                <th>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-plus"> Chọn Ram - Bộ nhớ trong</i>
                    </button>
                </th>
            </tr>
            <tr>
                <th class="built-pc-item-name">4. Ổ cứng</th>
                <th>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-plus"> Chọn Ổ cứng</i>
                    </button>
                </th>
            </tr>
            <tr class="background" style="background-color: #f9f9f9">
                <th class="built-pc-item-name">5. VGA - Card đồ họa</th>
                <th>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-plus"> Chọn VGA - Card đồ họa</i>
                    </button>
                </th>
            </tr>
            <tr>
                <th class="built-pc-item-name">6. PSU - Nguồn máy tính</th>
                <th>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-plus"> Chọn PSU - Nguồn máy tính</i>
                    </button>
                </th>
            </tr>
            <tr class="background" style="background-color: #f9f9f9">
                <th class="built-pc-item-name">7. Case- Vỏ máy tính</th>
                <th>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-plus"> Chọn Case- Vỏ máy tính</i>
                    </button>
                </th>
            </tr>
            <tr>
                <th class="built-pc-item-name">8. Cooling- tản nhiệt</th>
                <th>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-plus"> Chọn Cooling- tản nhiệt</i>
                    </button>
                </th>
            </tr>
            <tr class="background" style="background-color: #f9f9f9">
                <th class="built-pc-item-name">9. Monitor - Màn hình</th>
                <th>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-plus"> Chọn Monitor - Màn hình</i>
                    </button>
                </th>
            </tr>
            <tr>
                <th class="built-pc-item-name">10. Grear - Phụ kiện</th>
                <th>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-plus"> Chọn CPU - Vi xử lý</i>
                    </button>
                </th>
            </tr>
            
        </table>
    </div>
</div>

<div class="built-pc-item-drive-form">
    <div class="built-pc-item-drive-form-content">
        <div class="built-pc-item-drive-form-content-header">
            <h4>Chọn linh kiện</h4>
            <form action="">
                <input type="text" name="keyword" class="built-pc-item-drive-form-content-header-input"  id="keyword" placeholder="Bạn cần tìm kiếm linh kiện gì?">
                {{-- <span type="submit" class="built-pc-item-drive-form-content-header-submit"><i class="fas fa-search"></i></span> --}}
            </form>
            <a href=""><i class="fas fa-times"></i></a>
        </div>
        <div class="built-pc-item-drive-form-content-sort">
            <div class="built-pc-item-drive-form-content-sort-block">
                <strong>Sắp xếp:</strong>
                <form action="">
                    <select>
                        <option value="">Tùy chọn</option>
                        <option value="1">Mới nhất</option>
                        <option value="2">Giá tăng dần</option>
                        <option value="3">Giá giảm dần</option>
                        <option value="4">Tên A->Z</option>
                        <option value="5">Tên Z->A</option>  
                    </select>
                </form>
            </div>
            
        </div>
        <div class="built-pc-item-drive-form-content-item-page">
            <span>{!! $product_cpu->render() !!}</span>
        </div>
        <div id="list-product">
            @foreach ($product_cpu as $key=>$cpu)
                <div class="built-pc-item-drive-form-content-item">
                    <div class="built-pc-item-drive-form-content-item-img">
                        <a href="{{ URL::to("/home") }}"><img src="{{ asset('/public/fontend/images/icon/cpu.png') }}" alt=""></a>
                            
                    </div>
                    <div class="built-pc-item-drive-form-content-item-info">
                        <a href="#">{{ $cpu->laptop_name }}</a>
                        <br>
                        <span><strong>Bao hanh: </strong>36 thang</span>
                        <br>
                        <span><strong>Kho hang: </strong> Con hang</span>
                    </div>
                    <div built-pc-item-drive-form-content-item-add>
                        <button class="btn btn-primary">Them vao cau hinh 
                            <i class="fas fa-angle-right" style="font-size: 18px"></i> 
                        </button>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
        
    </div>
</div>




<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('keyup','#keyword' ,function () {
            var keyword = $(this).val();
            $.ajax({
                type: "get",
                url: "/search-built",
                data: {
                    keyword: keyword
                },
                dataType: "json",
                success: function (response) {
                    $('#list-product').html(response);
                }
            });
        });
    });
   
    
</script>
@endsection