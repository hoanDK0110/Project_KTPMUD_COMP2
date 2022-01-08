@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Thông tin khách hàng
      </div>

      <div class="table-responsive">
        <?php 
        $stt = 1;
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
              <th>Tên khách hàng</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Giới tính</th>
              <th>Mật khẩu</th>
              <th>Địa chỉ</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
        <tbody>
            @foreach ($all_user as $key => $user)
                <tr>
                    <td>{{ $stt }}</td>
                    <td>{{ $user->user_name }}</td>
                    <td>{{ $user->user_email }}</td>
                   
                    <td>{{ $user->user_phone }}</td>
              
        
                    <td>{{ $user->user_sex }}</td>
                    <td>{{ $user->user_password }}</td>
                    <td>{{ $user->user_address }}</td>
                   
                    <td>
                        <a href="{{ URL::to('/edit-user/'.$user->user_id) }}" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-pencil-square-o text-success text-active"></i>
                        </a>
                        <br>
                        <a onclick="return confirm('Bạn có muốn xóa tài khoản này chứ')"  href="{{ URL::to('/delete-user/'.$user->user_id) }}" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-times text-danger text"></i>
                        </a>
                    </td>
                </tr>
                @php
                    $stt++ 
                @endphp 
                
            @endforeach
            
            
        </tbody>
        </table>
      </div>
      <span style="padding:3px">{!! $all_user->render() !!}</span>
    </div>
  </div>
@endsection