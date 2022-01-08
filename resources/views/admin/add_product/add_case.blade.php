@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Case - Vỏ máy tính
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
                        <form role="form" action="{{URL::to('save-case') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="case_category" value="case">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên case</label>
                                <input type="text" name="case_name" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="case_price" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="case_brand" class="form-control input-sm m-bot15">
                                    <option value="NZXT">NZXT</option>
                                    <option value="Cooler Master">Cooler Master</option>
                                    <option value="Xigmatek">Xigmatek</option>
                                    <option value="Sama">Sama</option>
                                    <option value="Thermaltake">Thermaltake</option>
                                    <option value="Asus">Asus</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Lắp vừa mainboard</label>
                                <select name="case_size" class="form-control input-sm m-bot15">
                                    <option value="E-ATX (Cỡ lớn)">E-ATX (Cỡ lớn)</option>
                                    <option value="ATX (Cỡ đầy đủ)">ATX (Cỡ đầy đủ)</option>
                                    <option value="M-ATX (Cỡ trung)">M-ATX (Cỡ trung)</option>
                                    <option value="I-ATX (Cỡ nhỏ)">I-ATX (Cỡ nhỏ)</option>
                                   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="case_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="case_image" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="case_imgOther" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="case_desc" id="ckeditor" placeholder="Mô tả"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="case_spec" id="ckeditor1" placeholder="Thông số kỹ thuật"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="case_quantity" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="case_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            
                            <button type="submit" name="add_case " class="btn btn-info">Thêm Sản Phẩm</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection