@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật Grear - Phụ kiện
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
                        <form role="form" action="{{URL::to('update-grear'.$pro->product_id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="grear_category" value="grear">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên grear</label>
                                <input type="text" name="grear_name" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_name }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="grear_price" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_price }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Loại phụ kiện</label>
                                <select name="grear_type" class="form-control input-sm m-bot15">
                                    <option value="Bàn phím">Bàn phím</option>
                                    <option value="Chuột">Chuột</option>
                                    <option value="Tai nghe">Tai nghe</option>
                                    <option value="Pad chuột">Pad chuột</option>
                                    <option value="Âm thanh">Âm thanh</option>
                                    <option value="Tay game">Tay cầm chơi game</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="grear_brand" class="form-control input-sm m-bot15">
                                    <option value="AKKO">AKKO</option>
                                    <option value="E-DRA">E-DRA</option>
                                    <option value="Dareu">Dareu</option>
                                    <option value="Fuhlen">Fuhlen</option>
                                    <option value="Cooler Master">Cooler Master</option>
                                    <option value="Asus">Asus</option>
                                    <option value="Razer">Razer</option>
                                    <option value="Elgato">Elgato</option>
                                    <option value="Microlab">Microlab</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="grear_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="grear_image" class="form-control" id="exampleInputEmail1"
                                value="{{ $pro->product_image }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="grear_imgOther" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_imgOther }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="grear_desc" id="ckeditor" placeholder="Mô tả">{{ $pro->product_desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="grear_spec" id="ckeditor1" placeholder="Thông số kỹ thuật">{{ $pro->product_spec }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="grear_quantity" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="grear_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option> 
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <button type="submit" name="add_grear " class="btn btn-info">Cập nhật Sản Phẩm</button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection