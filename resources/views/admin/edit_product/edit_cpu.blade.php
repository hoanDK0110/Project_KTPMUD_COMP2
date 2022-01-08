@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật CPU - Vi xử lí
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
                        <form role="form" action="{{URL::to('update-cpu'.$pro->product_id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="cpu_category" value="cpu">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên CPU</label>
                                <input type="text" name="cpu_name" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_name }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="cpu_price" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_price }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="cpu_brand" class="form-control input-sm m-bot15">
                                    <option value="Intel">Intel</option>
                                    <option value="AMD">AMD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Số nhân</label>
                                <select name="cpu_core" class="form-control input-sm m-bot15">
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="8">8</option>
                                    <option value="10">10</option>
                                    <option value="12">12</option>
                                    <option value="14">14</option>
                                    <option value="16">16</option>
                                    <option value="18">18</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Số luồng</label>
                                <select name="cpu_thread" class="form-control input-sm m-bot15">
                                    <option value="8">8</option>
                                    <option value="12">12</option>
                                    <option value="16">16</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="20">20</option>
                                    <option value="20">20</option>
                                    <option value="24">24</option>
                                    <option value="28">28</option>
                                    <option value="32">32</option>
                                    <option value="36">36</option>
                                    <option value="40">40</option> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Dòng CPU</label>
                                <select name="cpu_type" class="form-control input-sm m-bot15">
                                    <option value="Intel Core i5">Intel Core i5</option>
                                    <option value="Intel Core i7">Intel Core i7</option>
                                    <option value="Intel Core i9">Intel Core i9</option>
                                    <option value="AMD Ryzen 5">AMD Ryzen 5</option>
                                    <option value="AMD Ryzen 7">AMD Ryzen 7</option>
                                    <option value="AMD Ryzen 9">AMD Ryzen 9</option>
                                    <option value="Intel Core i3">Intel Core i3</option>
                                    <option value="Intel Core X">Intel Core X</option>
                                    <option value="Intel Pentium">Intel Pentium</option>
                                    <option value="AMD Ryzen 3">AMD Ryzen 3</option>
                                    <option value="AMD Ryzen Athlon">AMD Ryzen Athlon</option>
                                    <option value="AMD Ryzen Threadripper">AMD Ryzen Threadripper</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="cpu_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="cpu_image" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_image }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="cpu_imgOther" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_imgOther }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="cpu_desc" id="ckeditor" placeholder="Mô tả">{{ $pro->product_desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="cpu_spec" id="ckeditor1" placeholder="Thông số kỹ thuật">{{ $pro->product_spec }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="cpu_quantity" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="cpu_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option>
                                    <option value="0">Ẩn</option>
                                     
                                </select>
                            </div>
                            
                            <button type="submit" name="add_cpu " class="btn btn-info">Cập nhật Sản Phẩm</button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection