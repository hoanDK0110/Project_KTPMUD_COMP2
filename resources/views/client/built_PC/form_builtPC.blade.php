<div class="built-pc-item-drive-form">
    <div class="built-pc-item-drive-form-content">
        <div class="built-pc-item-drive-form-content-header">
            <h4>Chọn linh kiện</h4>
            <form action="">
                <input type="text" name="" class="built-pc-item-drive-form-content-header-input"  id="" placeholder="Bạn cần tìm kiếm linh kiện gì?">
                <span type="submit" class="built-pc-item-drive-form-content-header-submit"><i class="fas fa-search"></i></span>
            </form>
            <a href=""><i class="fas fa-times"></i></a>
        </div>
        <div class="built-pc-item-drive-form-content-sort">
            <div class="built-pc-item-drive-form-content-sort-block">
                <strong>Sắp xếp:</strong>
                <form action="">
                    <select>
                        <option value="">Tùy chọn</option>
                        <option value="1">Mới nhất</option>
                        <option value="2">Giá tăng dần</option>
                        <option value="3">Giá giảm dần</option>
                        <option value="4">Tên A->Z</option>
                        <option value="5">Tên Z->A</option>  
                    </select>
                </form>
            </div>
            
        </div>
        <div class="built-pc-item-drive-form-content-item-page">
            <span>{!! $product_cpu->render() !!}</span>
        </div>
        @foreach ($product_cpu as $key=>$cpu)
            <div class="built-pc-item-drive-form-content-item">
                <div class="built-pc-item-drive-form-content-item-img">
                    <a href="{{ URL::to("/home") }}"><img src="{{ asset('/public/fontend/images/icon/cpu.png') }}" alt=""></a>
                        
                </div>
                <div class="built-pc-item-drive-form-content-item-info">
                    <a href="#">CPU Intel Core i9 10900 (2.8GHz turbo 5.2GHz | 10 nhân 20 luồng |  20MB Cache)</a>
                    <br>
                    <span><strong>Bao hanh: </strong>36 thang</span>
                    <br>
                    <span><strong>Kho hang: </strong> Con hang</span>
                </div>
                <div built-pc-item-drive-form-content-item-add>
                    <button class="btn btn-primary">Them vao cau hinh 
                        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
                    </button>
                </div>
            </div>
            <hr>
        @endforeach
        
    </div>
</div>

