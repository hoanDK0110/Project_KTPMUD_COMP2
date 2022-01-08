@extends('client_layout')
@section('home-content')
<link rel="stylesheet" href="{{ asset('/public/fontend/css/styleRegistor.css') }}">
<div class="content">
    <div style="margin:20px 0px 20px 150px; font-size: 16px">
        <a href="{{ URL::to('/home') }}">Trang chủ</a>
        <i class="fas fa-angle-right" style="font-size: 16px"></i> 
        <a href="{{ URL::to('/user-infor') }}">Thông tin khách hàng</a>
    </div>
    <div class="container-layout">
        <div class="registor-title">
            <h1>Thông tin của khách hàng</h1>
        </div>
        <?php 
            $message = Session::get('message');
            if($message){
                echo '<span style="color:red; padding-left:140px;" >'.$message.'</span>';
                Session::put('message', null);
            }
        ?>
        <div class="registor-content">
            <form action="{{ URL::to('/user-update/'.$user_infor->user_id) }}" method="POST">
                {{ csrf_field() }}
                <table class="registor-table">
                    <tr>
                        <td class="registor-content-title">Email:</td>
                        <td><input type="text" disabled name="user_email" id="" class="form-control" value="{{ $user_infor->user_email }}"></td>
                    </tr>
                    <tr>
                        <td class="registor-content-title">Tên:</td>
                        <td><input type="text" name="user_name" id=""
                        class="form-control" value="{{ $user_infor->user_name }}"></td>
                    </tr>
                    <tr>
                        <td class="registor-content-title">Số điện thoại:</td>
                        <td><input type="text" name="user_phone" value="{{ $user_infor->user_phone }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td class="registor-content-title">Giới tính</td>
                        <td>
                            <?php
                                if($user_infor->user_sex == 'Nam')
                                {
                            ?>
                                <input type="radio" checked name="user_sex" id="" value="Nam" style ="margin-left: 12px;
                            margin-bottom:12px;" > Nam
                                <input type="radio" name="user_sex" id="" value="Nữ" style="margin-left: 12px;margin-bottom:12px;"> Nữ
                            <?php
                                }else{
                            ?>
                                <input type="radio" name="user_sex" id="" value="Nam" style ="margin-left: 12px;
                            margin-bottom:12px;" > Nam
                                <input type="radio" checked name="user_sex" id="" value="Nữ" style="margin-left: 12px;margin-bottom:12px;"> Nữ
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="registor-content-title">Mật khẩu</td>
                        <td><input type="password" name="user_password" value="{{ md5($user_infor->user_password) }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td class="registor-content-title">Nhập lại mật khẩu</td>
                        <td><input type="password" name="user_repassword" value="{{ md5($user_infor->user_password)}}"
                        class="form-control"></td>
                    </tr>
                    <tr>
                        <td class="registor-content-title">Địa chỉ</td>
                        <td><input type="text" name="user_address" value="{{ $user_infor->user_address }}"
                        class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" name="update" style="background:#4267b2; text-transform:uppercase; font-size:15px; font-weight:bold; padding:10px 20px; color:#fff; border:none; margin-left:120px; ">Cập nhật</button>
                            <button type="reset" style="background:#4267b2; text-transform:uppercase; font-size:15px; font-weight:bold; padding:10px 20px; color:#fff; border:none; margin:auto;">Làm mới <i class="fas fa-undo-alt" style="color: white"></i></button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection