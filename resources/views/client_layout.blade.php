
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/public/fontend/css/styleLayout1.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/fontend/css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/fontend/css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>COMP2</title>
</head>
<body>
    <div class="header">
        <div class="header-row-1">
            <div class="header-row-1-content">
                <div class="header-row-1-content-1">
                    <ul>
                        <li>
                            <a href="#" >
                                <i class="fas fa-headphones-alt"style="color:white;"> Gọi tư vấn mua hàng</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-headphones-alt "style="color:white;"> Số điện thoại</i>
                                
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-newspaper" style="color:white;"> Tin công nghệ</i>
                                
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-row-1-content-2">
                    <?php 
                        $user_name = Session::get('user_name');
                        $user_id = Session::get('user_id');
                        if($user_name){
                    ?>
                        <a href="{{ URL::to('/user-infor/'.$user_id) }}" style="font-size:18px; color:white;">
                            <i class="far fa-user">
                                <?php 
                                echo $user_name;
                                ?>
                            </i>
                            
                        </a>
                    
                            <a href="{{ URL::to('/client-logout') }}" style="font-size:20px;color:white;">
                                <i class="fa fa-key"></i> 
                                <i class="far">Đăng xuất</i>   
                            </a>
                    <?php 
                        }
                        else {
                    ?>
                            <a href="{{ URL::to('/client-login') }}" style="font-size:20px;color:white;"><i class="far fa-user"> Đăng nhập /</i></a>
                            <a href="{{ URL::to('/client-registor') }}" style="font-size:20px;color:white;"><i class="far">Đăng kí </i></a>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="header-row-2">
            <div class="header-row-2-content">
                <div class="header-row-2-content-1">
                    <a href="{{ URL::to('/home') }}" class="home">
                        <i class="fas fa-home"></i>
                    </a>
                </div>
                <div class="header-row-2-content-2">
                    <form action="{{ URL::to('/search') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="key_words" placeholder="Nhập tên sản phẩm, từ khóa cần tìm ...">
                        <button type="submit" name="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="header-row-2-content-3">
                    <a href="" style="font-size:20px; color: black;">
                        <div class="header-row-2-content-3-boder">
                            <i class="fas fa-tags"></i>
                        </div>
                        <div class="">
                            <span>Khuyến mại</span>
                        </div>
                        
                    </a>
                </div>
                <div class="header-row-2-content-3">
                    <a href="{{ URL::to('/home/built-PC') }}"style="font-size:20px; color: black;">
                        <div class="header-row-2-content-3-boder">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="header-row-2-content-3-name">
                            <span>Xây dựng cấu hình</span>
                        </div>
                        
                    </a>
                </div>
                <div class="header-row-2-content-3">
                    
                    <a href="{{ URL::to("/home/cart/") }}" style="font-size:18px; color: black;">
                        <div class="header-row-2-content-3-boder">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                        <div class="header-row-2-content-3-name">
                            <span>Giỏ hàng</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @yield('home-content')
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" ></script>
<script type="text/javascript">
    function addToCart(event){
        event.preventDefault();
        let urlCart = $(this).data('url');
        $.ajax({
            type: "GET",
            url: urlCart,
            dataType: 'json',
            success: function (data) {
                if(data.code === 200){
                    alert('Thêm vào giỏ hàng thành công!');
                }
            },
            error: function (){

            }
        });
    }
    $(function(){
        $('.add_to_cart').on('click', addToCart)
    });
</script>
<script type="text/javascript">

    function cartUpdate(event){
        event.preventDefault();
        let urlUpdateCart = $('.update_cart_url').data('url');
        let id = $(this).data('id');
        let quantity = $(this).parents('tr').find('input.cart-quantity').val();
        // alert(quantity);
        $.ajax({
            type: "GET",
            url: urlUpdateCart,
            data: {id:id,quantity:quantity},
            success: function (data) {
               if(data.code === 200){
                   $('.cart_wrapper').html(data.cart_component);
                   alert('Cập nhật sản phẩm thành công!');
               }
            },
        });
    }

    function cartDelete(event){
        event.preventDefault();
        let urlDeleteCart = $('.delete_cart_url').data('url');
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: urlDeleteCart,
            data: {id:id},
            success: function (data) {
               if(data.code === 200){
                   $('.cart_wrapper').html(data.cart_component);
                   alert('Xóa sản phẩm thành công!');
               }
            },
        });
    }

    $(function (){
        $(document).on("click",'.cart_update', cartUpdate);
        $(document).on("click",'.cart_delete', cartDelete);
    })
</script>

<script type="text/javascript">
    $(document).ready(function(){  
        $('#sort').on('change',function(){
            var url = $(this).val();
            // alert(url);
            if(url){
                window.location = url;
            }
            return false;
        });

    });
</script>

</html>