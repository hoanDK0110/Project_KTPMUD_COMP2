@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Mainboard - Bo mạch chủ
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
                        <form role="form" action="{{URL::to('save-mainboard') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="mainboard_category" value="mainboard">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên mainboard</label>
                                <input type="text" name="mainboard_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="mainboard_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="mainboard_brand" class="form-control input-sm m-bot15">
                                    <option value="Asus">Asus</option>
                                    <option value="Asrock">Asrock</option>
                                    <option value="MSI">MSI</option>
                                    <option value="Gigabyte">Gigabyte</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hỗ trợ CPU</label>
                                <select name="mainboard_cpu" class="form-control input-sm m-bot15">
                                    <option value="Intel">Intel</option>
                                    <option value="AMD">AMD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Main Chipset</label>
                                <select name="mainboard_chipset" class="form-control input-sm m-bot15">
                                    <option value="Intel B560">Intel B560</option>
                                    <option value="Intel B460">Intel B460</option>
                                    <option value="AMD B550">AMD B550</option>
                                    <option value="AMD B450">AMD B450</option>
                                    <option value="Intel Z690">Intel Z690</option>
                                    <option value="Intel Z590">Intel Z590</option>
                                    <option value="Intel Z490">Intel Z490</option>
                                    <option value="AMD X470">AMD X470</option>
                                    <option value="AMD X570">AMD X570</option>
                                    <option value="AMD A520">AMD A520</option>
                                    <option value="Intel H410">Intel H410</option>
                                    <option value="Intel H470">Intel H470</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kích thước Mainboard</label>
                                <select name="mainboard_size" class="form-control input-sm m-bot15">
                                    <option value="E-ATX (Cỡ lớn)">E-ATX (Cỡ lớn)</option>
                                    <option value="ATX (Cỡ đầy đủ)">ATX (Cỡ đầy đủ)</option>
                                    <option value="M-ATX (Cỡ trung)">M-ATX (Cỡ trung)</option>
                                    <option value="I-ATX (Cỡ nhỏ)">I-ATX (Cỡ nhỏ)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="mainboard_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="mainboard_image" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="mainboard_imgOther" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="mainboard_desc" id="ckeditor" placeholder="Mô tả"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="mainboard_spec" id="ckeditor1" placeholder="Thông số kỹ thuật"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="mainboard_quantity" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="mainboard_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option> 
                                    <option value="0">Ẩn</option> 
                                </select>
                            </div>
                            
                            <button type="submit" name="add_mainboard " class="btn btn-info">Thêm Sản Phẩm</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection