@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Tất cả sản phẩm
      </div>

      <div class="table-responsive">
        <?php 
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert" >'.$message.'</span>';
            Session::put('message', null);
        }
        ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Hình sản phẩm</th>
                <th>Giá</th>
                <th style="width:50px;">Bảo hành</th>
                <th>Số lượng</th>
              
              <th style="width:30px;"></th>
            </tr>
          </thead>
        <tbody>
            @php
                $stt = 1;
            @endphp
            @foreach ($all_product as $key => $pro)
                <tr>
                    <td>{{ $stt }}</td>
                    <td>{{ $pro->product_name }}</td>
                    <td>{{ $pro->product_category }}</td>
                    <td><img src="{{ $pro->product_image }}" height="80px" width="100px"></td>
                    <td>{{ $pro->product_price }}</td>
                    <td>{{ $pro->product_insurance }}</td>
                    <td>{{ $pro->product_quantity }}</td>
                </tr>
                @php
                $stt++ 
                @endphp 
            @endforeach
            
            
        </tbody>
        </table>
      </div>
      <span style="padding:3px">{!! $all_product->render() !!}</span>
    </div>
  </div>
@endsection