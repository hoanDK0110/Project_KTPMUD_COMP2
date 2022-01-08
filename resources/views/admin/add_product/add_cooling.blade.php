@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Cooling - Tản nhiệt
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
                        <form role="form" action="{{URL::to('save-cooling') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="cooling_category" value="cooling">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên tản nhiệt</label>
                                <input type="text" name="cooling_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="cooling_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="cooling_brand" class="form-control input-sm m-bot15">
                                    <option value="Cooler Master">Cooler Master</option>
                                    <option value="Corsair">Corsair</option>
                                    <option value="Thermaltake">Thermaltake</option>
                                    <option value="NZXT">NZXT</option>
                                    <option value="Noctua">Noctua</option>
                                    <option value="ID-Cooling">ID-Cooling</option>
                                    <option value="Jonsbo">Jonsbo</option>
                                    <option value="Asus">Asus</option>
                                    <option value="MSI">MSI</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kiểu tản nhiệt</label>
                                <select name="cooling_type" class="form-control input-sm m-bot15">
                                    <option value="Tản nhiệt khí">Tản nhiệt khí</option>
                                    <option value="Tản nhiệt nước AIO">Tản nhiệt nước AIO</option>
                                    <option value="Tản stock">Tản stock</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Socket hỗ trợ</label>
                                <select name="cooling_socket" class="form-control input-sm m-bot15">
                                    <option value="LGA 1366">LGA 1366</option>
                                    <option value="LGA 1151">LGA 1151</option>
                                    <option value="LGA 1155">LGA 1155</option>
                                    <option value="LGA 1156">LGA 1156</option>
                                    <option value="LGA 1200">LGA 1200</option>
                                    <option value="LGA 1200">LGA 1200</option>
                                    <option value="LGA 2011">LGA 2011</option>
                                    <option value="LGA 2066">LGA 2066</option>
                                    <option value="Socket AM4">Socket AM4</option>
                                   
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="cooling_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="cooling_image" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="cooling_imgOther" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="cooling_desc" id="ckeditor"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="cooling_spec" id="ckeditor1"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="cooling_quantity" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="cooling_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option> 
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            
                            <button type="submit" name="add_cooling " class="btn btn-info">Thêm Sản Phẩm</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection