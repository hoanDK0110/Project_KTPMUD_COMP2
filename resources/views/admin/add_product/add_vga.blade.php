@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm VGA - Card đồ họa
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
                        <form role="form" action="{{URL::to('save-vga') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="vga_category" value="vga">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên VGA</label>
                                <input type="text" name="vga_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" name="vga_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất</label>
                                <select name="vga_brand" class="form-control input-sm m-bot15">
                                    <option value="Asus">Asus</option>
                                    <option value="MSI">MSI</option>
                                    <option value="Asrock">Asrock</option>
                                    <option value="Powercolor">Powercolor</option>
                                    <option value="Gigabyte">Gigabyte</option>
                                    <option value="Inno 3D">Inno 3D</option>
                                    <option value="Colorful">Colorful</option>
                                    <option value="Zotac">Zotac</option>
                                    <option value="Palit">Palit</option>
                                    <option value="Galax">Galax</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hãng sản xuất chipset</label>
                                <select name="vga_chipset" class="form-control input-sm m-bot15">
                                    <option value="nVidia">nVidia</option>
                                    <option value="AMD">AMD</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">GPU</label>
                                <select name="vga_gpu" class="form-control input-sm m-bot15">
                                    <option value="GTX 1050 Ti">GTX 1050 Ti</option>
                                    <option value="GTX 1650">GTX 1650</option>
                                    <option value="GTX 1650 Super">GTX 1650 Super</option>
                                    <option value="GTX 1660">GTX 1660</option>
                                    <option value="GTX 1600 Super">GTX 1600 Super</option>
                                    <option value="RTX 2060">RTX 2060</option>
                                    <option value="RTX 2060 Ti">RTX 2060 Ti</option>
                                    <option value="RTX 2070">RTX 2070</option>
                                    <option value="RTX 3060">RTX 3060</option>
                                    <option value="RTX 3060 Ti">RTX 3060 Ti</option>
                                    <option value="RTX 3070">RTX 3070</option>
                                    <option value="RTX 3070 Ti">RTX 3070 Ti</option>
                                    <option value="RTX 3080">RTX 3080</option>
                                    <option value="RTX 3080 Ti">RTX 3080 Ti</option>
                                    <option value="RTX 3090">RTX 3090</option>
                                    <option value="nVidia Quadro">nVidia Quadro</option>
                                    <option value="RX 5600 XT">RX 5600 XT</option>
                                    <option value="RX 5700 XT">RX 5700 XT</option>
                                    <option value="RX 6600">RX 6600</option>
                                    <option value="RX 6600 XT">RX 6600 XT</option>
                                    <option value="RX 6700">RX 6700</option>
                                    <option value="RX 6800">RX 6800</option>
                                    <option value="RX 6800 XT">RX 6800 XT</option>
                                    <option value="RX 6900">RX 6900</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Dung lượng VRAM</label>
                                <select name="vga_vram" class="form-control input-sm m-bot15">
                                    
                                    <option value="VRAM 4GB">VRAM 4GB</option>
                                    <option value="VRAM 5GB">VRAM 5GB</option>
                                    <option value="VRAM 6GB">VRAM 6GB</option>
                                    <option value="VRAM 8GB">VRAM 8GB</option>
                                    <option value="VRAM 10GB">VRAM 10GB</option>
                                    <option value="VRAM 11GB">VRAM 11GB</option>
                                    <option value="VRAM 12GB">VRAM 12GB</option>
                                    <option value="VRAM 16GB">VRAM 16GB</option>
                                    <option value="VRAM 24GB">VRAM 24GB</option>
                                    <option value="VRAM 48GB">VRAM 48GB</option>
                                   
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời gian bảo hành</label>
                                <select name="vga_insurance" class="form-control input-sm m-bot15">
                                    <option value="12 tháng">12 tháng</option>
                                    <option value="24 tháng">24 tháng</option>
                                    <option value="36 tháng">36 tháng</option>
                                    <option value="48 tháng">48 tháng</option>
                                    <option value="60 tháng">60 tháng</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="text" name="vga_image" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình khác</label>
                                <input type="text" name="vga_imgOther" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="vga_desc" id="ckeditor" placeholder="Mô tả"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thông số kỹ thuật</label>
                                <textarea style="resize: none" rows = "8" class="form-control" name="vga_spec" id="ckeditor1" placeholder="Thông số kỹ thuật"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                                <input type="number" name="vga_quantity" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="vga_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiện</option> 
                                    <option value="0">Ẩn</option> 
                                </select>
                            </div>
                            <button type="submit" name="add_vga " class="btn btn-info">Thêm Sản Phẩm</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection