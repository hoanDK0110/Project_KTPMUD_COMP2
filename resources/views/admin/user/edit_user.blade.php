@extends('admin_layout')
@section('admin_content')
<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thông tin khách hàng
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
                        @foreach ($edit_user as $key=> $user)
                        <form role="form" action="{{URL::to('update-user/'.$user->user_id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="case_category" value="case">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="user_email" class="form-control" id="exampleInputEmail1" value="{{ $user->user_email }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên khách hàng</label>
                                <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" value="{{ $user->user_name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="text" name="user_phone" class="form-control" id="exampleInputEmail1" value="{{ $user->user_phone }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giới tính</label>
                                <br>
                                <?php
                                if($user->user_sex == 'Nam')
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
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input type="text" name="user_password" class="form-control" id="exampleInputEmail1" value="{{ $user->user_password }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <input type="text" name="user_address" class="form-control" id="exampleInputEmail1" value="{{ $user->user_address }}">
                            </div>
                            
                            <button type="submit" name="update_user " class="btn btn-info">Cập nhật thông tin</button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection