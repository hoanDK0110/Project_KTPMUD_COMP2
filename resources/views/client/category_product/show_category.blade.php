@extends('client_layout')
@section('home-content')
<link rel="stylesheet" href="{{ asset('/public/fontend/css/styleCategory.css') }}">
@php
    $category = $product_category->product_category
@endphp
<div class="controll" >
    <h5> 
        <a href="{{ URL::to('/home') }}">Trang chủ</a>
        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
        <a href="{{ URL::to('/home/'.$category) }}">{{ $category }}</a>
    </h5>   
</div>

<div class="container-layout">
    <div class="home-product">
        <div class="category-title">
            <h1>Danh sách sản phẩm</h1>
        </div>
        <div class="category-sort">
            <form action="">
                {{ csrf_field() }}
                <select id="sort" name="sort">
                    <option value="">--Sắp xếp--</option>
                    <option value="{{ Request::url() }}?sort_by=moi_nhat">Mới nhất</option>
                    <option value="{{ Request::url() }}?sort_by=tang_dan">Giá tăng dần</option>
                    <option value="{{ Request::url() }}?sort_by=giam_dan">Giá giảm dần</option>
                    <option value="{{ Request::url() }}?sort_by=kytu_az">Tên A->Z</option>
                    <option value="{{ Request::url() }}?sort_by=kytu_za">Tên Z->A</option>
                </select>
            </form>
        </div>
        {{-- <div class="home-product-title-render">
            <span style="padding:3px">{!! $product->render() !!}</span>
        </div> --}}
        <hr>
        <div class="category-product-content" id="category-content">
            <div class="col-md-3 slide-filter">
                <form>            
                    <h3>Hãng sản xuất</h3>
                    <label class="container">Asus
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Lenovo
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">MSI
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Apple
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Gigabyte
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Acer
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Dell
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>

                    <hr>

                    <h3>Bộ vi xử lí</h3>
                    <label class="container">Intel Core i3
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Intel Core i5
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Intel Core i7
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Intel Core i9
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">AMD Ryzen 3
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">AMD Ryzen 5
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">AMD Ryzen 7
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">AMD Ryzen 9
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Apple M1
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    
                    <hr>

                    <h3>Dung lượng RAM</h3>
                    <label class="container">8 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">16 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">32 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">64 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    
                    <hr>

                    <h3>Card đồ họa</h3>
                    <label class="container">Card onboard
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Card rời nVidia
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">Card rời AMD
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>

                    <hr>

                    <h3>Dung lượng RAM</h3>
                    <label class="container">8 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">16 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">32 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">64 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>

                    <hr>

                    <h3>Kích thước màn hình</h3>
                    <label class="container">17 inch
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">15.6 inch
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">14 inch
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">13 inch
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    
                    <hr>
                    
                    <h3>Dung lượng ổ cứng</h3>
                    <label class="container">256 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">512 GB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">1 TB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">2 TB
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    
                </form>
            </div>
            <div class="category-product-content-item">
                @include('client.category_product.category_component')
            </div>
         
        </div>
    </div>
</div> 
<?php
    $orderField = isset($_GET['field']) ? $_GET['field']:"";
    $orderSort = isset($_GET['sort']) ? $_GET['sort']:"";
    // print_r($orderSort);
    if(!empty( $orderField) && !empty( $orderSort)){
        $orderCondition = "ORDER BY `products`.`".$orderField."` ".$orderSort;
        print_r($orderCondition);exit;
    }
?>


<script>
    export default {
      data() {
        return {
          selected: [], // Must be an array reference!
          options: [
            { text: 'Orange', value: 'orange' },
            { text: 'Apple', value: 'apple' },
            { text: 'Pineapple', value: 'pineapple' },
            { text: 'Grape', value: 'grape' }
          ]
        }
      }
    }
  </script>


@endsection