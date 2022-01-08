@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Ổ cứng
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
                        <form role="form" action="{{URL::to('save-hd') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="hd_category" value="hd">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên ổ cứng</label>
                                <input type="text" name="hd_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="hd_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="hd_brand" class="form-control input-sm m-bot15">
                                    <option value="Asus">Asus</option>
                                    <option value="Wesstern Digital">Wesstern Digital</option>
                                    <option value="MSI">MSI</option>
                                    <option value="Kingston">Kingston</option>
                                    <option value="Gigabyte">Gigabyte</option>
                                    <option value="Seagate">Seagate</option>
                                    <option value="Adata">Adata</option>
                                    <option value="Corsair">Corsair</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="TRM">TRM</option>
                                    <option value="Silicon Power">Silicon Power</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Loại ổ cứng</label>
                                <select name="hd_type" class="form-control input-sm m-bot15">
                                    <option value="Ổ cứng SSD">Ổ cứng SSD</option>
                                    <option value="Ổ cứng HDD">Ổ cứng HDD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Dung lượng</label>
                                <select name="hd_memory" class="form-control input-sm m-bot15">
                                    <option value="512 GB">512 GB</option>
                                    <option value="1 TB">1 TB</option>
                                    <option value="120 GB">120 GB</option>
                                    <option value="128 GB">128 GB</option>
                                    <option value="240 GB">240 GB</option>
                                    <option value="250 GB">250 GB</option>
                                    <option value="256 GB">256 GB</option>
                                    <option value="480 GB">480 GB</option>
                                    <option value="500 GB">500 GB</option>
                                    <option value="2 TB">2 TB</option>
                                    <option value="4 TB">4 TB</option>
                                    <option value="8 TB">8 TB</option>   
                                </select>
                            </div>
                    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="hd_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="hd_image" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="hd_imgOther" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="hd_desc" id="ckeditor" placeholder="Mô tả"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="hd_spec" id="ckeditor1" placeholder="Thông số kỹ thuật"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="hd_quantity" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="hd_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option> 
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            
                            <button type="submit" name="add_hd " class="btn btn-info">Thêm Sản Phẩm</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection