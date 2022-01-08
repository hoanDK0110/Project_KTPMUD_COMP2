@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật RAM - Bộ nhớ trong
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
                        <form role="form" action="{{URL::to('update-ram'.$pro->product_id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="ram_category" value="ram">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên ram</label>
                                <input type="text" name="ram_name" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_name }}">
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="ram_price" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_price }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="ram_brand" class="form-control input-sm m-bot15">
                                    <option value="Adata">Adata</option>
                                    <option value="G.Skill">G.Skill</option>
                                    <option value="Colorful">Colorful</option>
                                    <option value="Corsair">Corsair</option>
                                    <option value="Gigabyte">Gigabyte</option>
                                    <option value="Kingston">Kingston</option>
                                    <option value="Samsung">Samsung</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Dung lương</label>
                                <select name="ram_memory" class="form-control input-sm m-bot15">
                                    <option value="8 GB">8 GB</option>
                                    <option value="16 GB">16 GB</option>
                                    <option value="32 GB">32 GB</option>
                                    <option value="64 GB">64 GB</option>
                                    <option value="128 GB">128 GB</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bus ram</label>
                                <select name="ram_bus" class="form-control input-sm m-bot15">
                                
                                   
                                    <option value="2400 MHz">2400 MHz</option>
                                    <option value="2666 MHz">2666 MHz</option>
                                    <option value="3000 MHz">3000 MHz</option>
                                    <option value="3200 MHz">3200 MHz</option>
                                    <option value="3600 MHz">3600 MHz</option>
                                    <option value="3733 MHz">3733 MHz</option>
                                    <option value="4000 MHz">4000 MHz</option>
                                    <option value="4400 MHz">4400 MHz</option>
                                    <option value="5200 MHz">5200 MHz</option>
                                    <option value="5600 MHz">5600 MHz</option>
                                    <option value="6000 MHz">6000 MHz</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bộ nhớ ram</label>
                                <select name="ram_type" class="form-control input-sm m-bot15">
                                   
                                    <option value="DDR4">DDR4</option>
                                    <option value="DDR5">DDR5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="ram_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="ram_image" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_image }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="ram_imgOther" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_imgOther }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="ram_desc" id="ckeditor" placeholder="Mô tả">{{ $pro->product_desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="ram_spec" id="ckeditor1" placeholder="Thông số kỹ thuật">{{ $pro->product_spec }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="ram_quantity" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="ram_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option> 
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            
                            <button type="submit" name="add_ram " class="btn btn-info">Cập nhật Sản Phẩm</button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection