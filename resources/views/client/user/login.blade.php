@extends('client_layout')
@section('home-content')
<link rel="stylesheet" href="{{ asset('/public/fontend/css/styleLogin1.css') }}">
<div class="controll" >
    <h5> 
        <a href="{{ URL::to('/home') }}">Trang chủ</a>
        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
        <a href="{{ URL::to('/client-login') }}">Đăng nhập</a>
    </h5> 
</div>
<div class="container-layout">
    <div class="title">
        <h1>Đăng nhập hệ thống</h1>
    </div>
    <?php 
     $message = Session::get('message');
     if($message){
         echo '<span style="color:red; padding-left:140px;" >'.$message.'</span>';
         Session::put('message', null);
     }
     ?>
    <div class="login-content">
        <form action="{{ URL::to('/client-loginned') }}" method="POST">
         {{ csrf_field() }}
             <table>
                 <tr>
                     <td class="login-content-title">Email đăng nhập:</td>
                     <td><input type="text" name="user_email" class="form-control"></td>
                 </tr>
                 <tr>
                     <td class="login-content-title">Mật khẩu:</td>
                     <td><input type="password" name="user_password" id="" class="form-control"></td>
                 </tr>
                 <tr>
                     <td></td>
                     <td>
                         <button type="submit" class="btn btn-primary login-content-submit" name="submit">Đăng nhập</button>
                     </td>
             </table>
        </form>
    </div>
    <span style="padding-left:280px; font-size:18px; padding-bottom: 20px">Bạn chưa có tài khoản? <strong><a href="{{ URL::to('/client-registor') }}">Đăng kí tài khoản</a></strong></span>
</div>

@endsection