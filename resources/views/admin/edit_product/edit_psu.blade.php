@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật PSU - Nguồn máy tính
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
                        <form role="form" action="{{URL::to('update-psu'.$pro->product_id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="psu_category" value="psu">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên nguồn máy tính</label>
                                <input type="text" name="psu_name" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_name }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="psu_price" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_price }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="psu_brand" class="form-control input-sm m-bot15">
                                    <option value="Super Flower">Super Flower</option>
                                    <option value="Corsair">Corsair</option>
                                    <option value="Thermaltake">Thermaltake</option>
                                    <option value="Gigabyte">Gigabyte</option>
                                    <option value="Xigmatek">Xigmatek</option>
                                    <option value="Seasonic">Seasonic</option>
                                    <option value="Antec">Antec</option>
                                    <option value="Cooler Master">Cooler Master</option>
                                    <option value="Asus">Asus</option>
                                    <option value="MSI">MSI</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Công suất nguồn</label>
                                <select name="psu_wattage" class="form-control input-sm m-bot15">
                                   
                                    <option value="450 W">450 W</option>
                                    <option value="500 W">500 W</option>
                                    <option value="550 W">550 W</option>
                                    <option value="600 W">600 W</option>
                                    <option value="620 W">620 W</option>
                                    <option value="650 W">650 W</option>
                                    <option value="700 W">700 W</option>
                                    <option value="750 W">750 W</option>
                                    <option value="850 W">850 W</option>
                                    <option value="1000 W">1000 W</option>
                                    <option value="1200 W">1200 W</option>
                                    <option value="1300 W">1300 W</option>
                                    <option value="1600 W">1600 W</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Chuẩn 80 Plus</label>
                                <select name="psu_80plus" class="form-control input-sm m-bot15">
                                    <option value="80+ Brone">80+ Brone</option>
                                    <option value="80+ Silver">80+ Silver</option>
                                    <option value="80+ Gold">80+ Gold</option>
                                    <option value="80+ Platium">80+ Platium</option>
                                    <option value="80+ Titanium">80+ Titanium</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kiểu dây nguồn</label>
                                <select name="psu_type" class="form-control input-sm m-bot15">
                                    <option value="Full modular (Dây rời toàn bộ)">Full modular (Dây rời toàn bộ)</option>
                                    <option value="Semi Modular (Dây rời trừ 24 pin & 8 pin)">Semi Modular (Dây rời trừ 24 pin & 8 pin)</option>
                                    <option value="None Modular (Dây liền toàn bộ)">None Modular (Dây liền toàn bộ)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="psu_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="psu_image" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_image }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="psu_imgOther" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_imgOther }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="psu_desc" id="ckeditor" placeholder="Mô tả">{{ $pro->product_desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="psu_spec" id="ckeditor1" placeholder="Thông số kỹ thuật">{{ $pro->product_spec }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="psu_quantity" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="psu_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option> 
                                    <option value="0">Ẩn</option> 
                                </select>
                            </div>
                            
                            <button type="submit" name="add_psu " class="btn btn-info">Cập nhật Sản Phẩm</button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection