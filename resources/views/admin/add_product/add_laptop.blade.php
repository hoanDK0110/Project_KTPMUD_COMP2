@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Laptop 
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
                        <form role="form" action="{{URL::to('save-laptop') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="laptop_category" value="laptop">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên laptop</label>
                                <input type="text" name="laptop_name" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="laptop_price" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="laptop_brand" class="form-control input-sm m-bot15">
                                    <option value="Asus">Asus</option>
                                    <option value="Lenovo">Lenovo</option>
                                    <option value="MSI">MSI</option>
                                    <option value="Apple">Apple</option>
                                    <option value="Gigabyte">Gigabyte</option>
                                    <option value="Acer">Acer</option>
                                    <option value="Dell">Dell</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Bộ vi xử lí - CPU</label>
                                <select name="laptop_cpu" class="form-control input-sm m-bot15">
                                    <option value="Intel Core i5">Intel Core i5</option>
                                    <option value="Intel Core i7">Intel Core i7</option>
                                    <option value="AMD Ryzen 5">AMD Ryzen 5</option>
                                    <option value="AMD Ryzen 7">AMD Ryzen 7</option>
                                    <option value="AMD Ryzen 9">AMD Ryzen 9</option>
                                    <option value="Intel Core i3">Intel Core i3</option>
                                    <option value="Intel Core i9">Intel Core i9</option>
                                    <option value="Apple M1">Apple M1</option>
                                   
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Dung lượng Ram</label>
                                <select name="laptop_ram" class="form-control input-sm m-bot15">
                                    
                                    <option value="8 GB">8 GB</option>
                                    <option value="16 GB">16 GB</option>
                                    <option value="32 GB">32 GB</option>
                                    <option value="64 GB">64 GB</option>
                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Card đồ họa - VGA</label>
                                <select name="laptop_vga" class="form-control input-sm m-bot15">
                                    <option value="Card onboard">Card onboard</option>
                                    <option value="Card rời nVidia">Card rời nVidia</option>
                                    <option value="Card rời AMD">Card rời AMD</option>
                                    
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kích thước màn hình</label>
                                <select name="laptop_monitor" class="form-control input-sm m-bot15">
                                    <option value="15.6 inch">15.6 inch</option>
                                    <option value="14 inch">14 inch</option>
                                    <option value="13 inch">13 inch</option>
                                    <option value="17 inch">17 inch</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Dung lượng ổ cứng</label>
                                <select name="laptop_memory" class="form-control input-sm m-bot15">

                                    <option value="512 GB">512 GB</option>
                                    <option value="256 GB">256 GB</option>
                                    <option value="1 TB">1 TB</option>
                                    <option value="2 TB">2 TB</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="laptop_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="laptop_image" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="laptop_imgOther" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="laptop_desc" id="ckeditor" placeholder="Mô tả"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="laptop_spec" id="ckeditor1" placeholder="Thông số kỹ thuật"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="laptop_quantity" class="form-control" id="exampleInputEmail1">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="laptop_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option> 
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            
                            <button type="submit" name="add_laptop " class="btn btn-info">Thêm Sản Phẩm</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection