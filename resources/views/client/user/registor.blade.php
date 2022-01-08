@extends('client_layout')
@section('home-content')
<link rel="stylesheet" href="{{ asset('/public/fontend/css/styleRegistor.css') }}">
    
<div class="controll" >
    <h5> 
        <a href="{{ URL::to('/home') }}">Trang chủ</a>
        <i class="fas fa-angle-right" style="font-size: 18px"></i> 
        <a href="{{ URL::to('/client-registor') }}">Đăng kí</a>
    </h5>   
</div>
<div class="container-layout">
    <div class="title">
        <h1>Tạo tài khoản cá nhân</h1>
    </div>
    <?php 
    $message = Session::get('message');
    if($message){
        echo '<span style="color:red; padding-left:140px;" >'.$message.'</span>';
        Session::put('message', null);
    }
    ?>
    <div class="registor-content">
        <form action="{{ URL::to('/client-registored') }}" method="POST">
            {{ csrf_field() }}
            <table class="registor-table">
                <tr>
                    <td class="registor-content-title">Email đăng kí</td>
                    <td><input type="text" name="user_email" id="" class="form-control"></td>
                </tr>
                <tr>
                    <td class="registor-content-title">Tên</td>
                    <td><input type="text" name="user_name" id=""
                    class="form-control"></td>
                </tr>
                <tr>
                    <td class="registor-content-title">Số điện thoại</td>
                    <td><input type="text" name="user_phone" id=""
                    class="form-control"></td>
                </tr>
                <tr>
                    <td class="registor-content-title">Giới tính</td>
                    <td>
                        <input type="radio" name="user_sex" id="" value="Nam" style ="margin-left: 12px;
                        margin-bottom:12px;" > Nam
                        <input type="radio" name="user_sex" id="" value="Nữ" style="margin-left: 12px;margin-bottom:12px;"> Nữ
                    </td>
                </tr>
                <tr>
                    <td class="registor-content-title">Mật khẩu</td>
                    <td><input type="password" name="user_password" id=""
                    class="form-control"></td>
                </tr>
                <tr>
                    <td class="registor-content-title">Nhập lại mật khẩu</td>
                    <td><input type="password" name="user_repassword" id=""
                    class="form-control"></td>
                </tr>
                <tr>
                    <td class="registor-content-title">Địa chỉ</td>
                    <td><input type="text" name="user_address" id=""
                    class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary registor-content-submit" name="submit">Đăng kí</button>
                        <button type="reset" class="btn btn-primary registor-content-submit">Làm mới <i class="fas fa-undo-alt" style="color: white"></i></button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
 
@endsection