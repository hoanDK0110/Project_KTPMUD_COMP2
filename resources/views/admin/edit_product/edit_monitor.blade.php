@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật Monitor - Màn hình
                </header>

                <div class="panel-body">
                    <?php 
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert" >'.$message.'</span>';
                            Session::put('message', null);
                        }
                        else {
                            '<span class="text-alert">Thêm không thành công</span>';
                            
                        }
                    ?>

                    <div class="position-center">
                        @foreach ($edit_product as $key=> $pro)
                        <form role="form" action="{{URL::to('update-monitor'.$pro->product_id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="monitor_category" value="monitor">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên màn hình</label>
                                <input type="text" name="monitor_name" class="form-control" id="exampleInputEmail1"  value="{{ $pro->product_name }}">
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="monitor_price" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_price }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="monitor_brand" class="form-control input-sm m-bot15">
                                    <option value="Asus">Asus</option>
                                    <option value="LG">LG</option>
                                    <option value="MSI">MSI</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Gigabyte">Gigabyte</option>
                                    <option value="Acer">Acer</option>
                                    <option value="Viewsonic">Viewsonic</option>
                                    <option value="HKC">HKC</option>
                                    <option value="AOC">AOC</option>
                                    <option value="Dell">Dell</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Độ phân giải</label>
                                <select name="monitor_resolution" class="form-control input-sm m-bot15">
                                    <option value="1920 x 1080 (FHD)">1920 x 1080 (FHD)</option>
                                    <option value="2560 x 1440 (QHD 2K)">2560 x 1440 (QHD 2K)</option>
                                    <option value="1600 x 900">1600 x 900</option>
                                    <option value="2560 x 1080 (WFHD)">2560 x 1080 (WFHD)</option>
                                    <option value="3440 x 1440 (WQHD)">3440 x 1440 (WQHD)</option>
                                    <option value="3840 x 1080">3840 x 1080</option>
                                    <option value="3840 x 1600">3840 x 1600</option>
                                    <option value="3840 x 2160 (UHD 4K)">3840 x 2160 (UHD 4K)</option>
                                    <option value="5120 x 2880 (UHD 5k)">5120 x 2880 (UHD 5k)</option>
                                    
                                   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kích thước màn hình</label>
                                <select name="monitor_size" class="form-control input-sm m-bot15">
                                    <option value="24 inch">24 inch</option>
                                    <option value="25 inch">25 inch</option>
                                    <option value="27 inch">27 inch</option>
                                    <option value="29 inch">29 inch</option>
                                    <option value="30 inch">30 inch</option>
                                    <option value="32 inch">32 inch</option>
                                    <option value="34 inch">34 inch</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tần số quét</label>
                                <select name="monitor_hz" class="form-control input-sm m-bot15">
                                    <option value="60 Hz">60 Hz</option>
                                    <option value="75 Hz">75 hz</option>
                                    <option value="100 Hz">100 Hz</option>
                                    <option value="144 Hz">144 Hz</option>
                                    <option value="165 Hz">165 Hz</option>
                                    <option value="170 Hz">170 Hz</option>
                                    <option value="200 Hz">200 hz</option>
                                    <option value="240 Hz">240 Hz</option>
                                    <option value="360 Hz">360 hz</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tấm nền</label>
                                <select name="monitor_bp" class="form-control input-sm m-bot15">
                                    <option value="IPS">IPS</option>
                                    <option value="TN">TN</option>
                                    <option value="VA">VA</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Bề mặt</label>
                                <select name="monitor_face" class="form-control input-sm m-bot15"> 
                                    <option value="Màn hình phẳng">Màn hình phẳng</option>
                                    <option value="Màn hình cong">Màn hình cong</option>
                                   
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="monitor_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="monitor_image" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_image }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="monitor_imgOther" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_imgOther }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="monitor_desc" id="ckeditor" placeholder="Mô tả">{{ $pro->product_desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="monitor_spec" id="ckeditor1" placeholder="Thông số kỹ thuật">{{ $pro->product_spec }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="monitor_quantity" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="monitor_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option> 
                                    <option value="0">Ẩn</option> 
                                </select>
                            </div>
                            
                            <button type="submit" name="add_monitor " class="btn btn-info">Cập nhật Sản Phẩm</button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection