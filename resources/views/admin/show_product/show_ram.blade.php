@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liệt kê RAM - Bộ nhớ trong
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
              <th>Tên sản phẩm</th>
              <th>Giá</th>
              <th>Hình sản phẩm</th>
              <th>Thương hiệu</th>
              <th>Dung lượng</th>
              <th>Bus ram</th>
              <th>Loại ram</th>
              <th>Hiển thị</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
        <tbody>
            @foreach ($all_product as $key => $pro)
                <tr>
                    <td>{{ $pro->product_name }}</td>
                    <td>{{ $pro->product_price }}</td>
                    
                    <td><img src="{{ $pro->product_image }}" height="80px" width="100px"> </td>
                    
                    @php 
                        $details = json_decode($pro->product_details,true);
                        
                    @endphp
                    <td>{{ $details['brand'] }}</td>
                    <td>{{ $details['memory'] }}</td>
                    <td>{{ $details['bus'] }}</td>
                    <td>{{ $details['type'] }}</td>
                    <td><span class="text-ellipsis">
                        <?php 
                            if($pro->product_status == 1){
                        ?>
                            <a href="{{ URL::to('/unactive-product/'.$pro->product_id) }}"><span class="fa-thumbs-styling fa fa-thumbs-up"></span></a>;
                        <?php 
                            }else{
                        ?>
                            <a href="{{ URL::to('/active-product/'.$pro->product_id) }}"><span class="fa-thumbs-styling fa fa-thumbs-down"></span></a>;
                        <?php 
                            }
                        ?>

                    </span></td>
                   
                    <td>
                        <a href="{{ URL::to('/edit-ram/'.$pro->product_id) }}" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-pencil-square-o text-success text-active"></i>
                        </a>
                        <a onclick="return confirm('Bạn có muốn xóa nó chứ')"  href="{{ URL::to('/delete-product/'.$pro->product_id) }}" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-times text-danger text"></i>
                        </a>
                        
                    </td>
                </tr>
            @endforeach
            
            
        </tbody>
        </table>
      </div>
      <span style="padding:3px">{!! $all_product->render() !!}</span>
    </div>
  </div>
@endsection