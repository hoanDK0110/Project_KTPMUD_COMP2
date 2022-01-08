<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Support\Arr;
use Session, DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class WebController extends Controller
{
    public function home(){
        
        $product_laptop = DB::table('products')->where('product_category', 'laptop')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_mainboard = DB::table('products')->where('product_category', 'mainboard')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_cpu = DB::table('products')->where('product_category', 'cpu')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_ram = DB::table('products')->where('product_category', 'ram')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_vga = DB::table('products')->where('product_category', 'vga')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_hd = DB::table('products')->where('product_category', 'hard drive')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_psu = DB::table('products')->where('product_category', 'psu')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_case = DB::table('products')->where('product_category', 'case')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_monitor = DB::table('products')->where('product_category', 'monitor')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_cooling = DB::table('products')->where('product_category', 'cooling')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        $product_grear = DB::table('products')->where('product_category', 'grear')->where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        
        return view('client.home_content')
        ->with('product_laptop',$product_laptop)
        ->with('product_mainboard',$product_mainboard)
        ->with('product_cpu',$product_cpu)
        ->with('product_ram',$product_ram)
        ->with('product_vga',$product_vga)
        ->with('product_hd',$product_hd)
        ->with('product_psu',$product_psu)
        ->with('product_case',$product_case)
        ->with('product_monitor',$product_monitor)
        ->with('product_cooling',$product_cooling)
        ->with('product_grear',$product_grear);
    }

    public function client_login(){
        return view('client.user.login');
    }
    
    public function client_loginned(Request $request){
        $user_email = $request->user_email;
        $user_password = md5($request->user_password);

        $result = DB::table('users')->where('user_email', $user_email)->where('user_password', $user_password)->first();
        if($result){
            Session::put('user_name', $result->user_name);
            Session::put('user_id', $result->user_id);
            return Redirect::to('/home');
        }else{
            Session::put('message', 'Tài khoản hoặc mật khẩu sai!');
            return Redirect::to('/client-login');
        }
    }

    public function user_infor($user_id){
        $user_infor = DB::table('users')->where('user_id',$user_id)->first();
        return view('client.user.user_infor')->with('user_infor', $user_infor);
    }

    public function user_update(Request $request,$user_id){
        $data = array();
        $data['user_name'] = $request->user_name;
        $data['user_phone'] = $request->user_phone;
        $data['user_sex'] = $request->user_sex;
        $data['user_password'] = md5($request->user_password);
        $data['user_address'] = $request->user_address;
        if($_POST["user_name"] != '' && $_POST["user_phone"] != ''&& $_POST["user_password"] != '' && $_POST
        ["user_repassword"] != '' && $_POST["user_address"] != ''){
            $password =$_POST['user_password'];
            $repassword =$_POST['user_repassword'];
            if($password != $repassword){
                Session::put('message','Hai mật khẩu không trùng khớp');
                return Redirect::to('/user-infor/'.$user_id);
            }else{
                DB::table('users')->where('user_id', $user_id)->update($data);
                Session::put('message','Cập nhật tài khoản thành công');
                return Redirect::to('/user-infor/'.$user_id);
            }
        }else{
            Session::put('message', 'Hãy nhập đầy đủ thông tin!');
            return Redirect::to('/user-infor/'.$user_id);
        }
    }
    public function client_registor(){
        return view('client.user.registor');
    }

    public function client_logout(){
        Session::put('user_name', null);
        Session::put('user_id', null);
        return Redirect::to('/home');
    }

    public function client_registored(Request $request){
        $userEmail = DB::table('users')->where('user_email', $request->user_email)->get();
        
        if($userEmail ==''){
            Session::put('message','Email đã được sử dụng. Vui lòng chọn địa chỉ email khác!');
                return Redirect::to('/client-registor');
        }else{
            $data = array();
            $data['user_email'] = $request->user_email;
            $data['user_name'] = $request->user_name;
            $data['user_phone'] = $request->user_phone;
            $data['user_sex'] = $request->user_sex;
            $data['user_password'] = md5($request->user_password);
            $data['user_address'] = $request->user_address;
            if(isset($_POST['submit']) && $_POST["user_email"] != '' &&  $_POST["user_name"] != '' && $_POST["user_password"] != '' &&$_POST
            ["user_repassword"] != '' && $_POST["user_address"] != ''){
                $password =$_POST['user_password'];
                $repassword =$_POST['user_repassword'];
                if($password != $repassword){
                    Session::put('message','Hai mật khẩu không trùng khớp');
                    return Redirect::to('/client-registor');
                }else{
                    DB::table('users')->insert($data);
                    Session::put('message','Tạo tài khoản thành công, mời bạn đăng nhập');
                   
                    return Redirect::to('/client-login');
                }
            }
            else{
                Session::put('message', 'Hãy nhập đầy đủ thông tin!');
                
                return Redirect::to('/client-registor');
            }
        }
        
    }
    //Search product
    public function search_product(Request $request){
        $keywords = $request->key_words;
        $product = DB::table('products')->where('product_name','like','%'.$keywords.'%')->paginate(32);
        return view('client.search')->with('product',$product)->with('keywords',$keywords);
    }

    //Detail product
    public function detail_product($product_id){
        $product = DB::table('products')->where('product_id', $product_id)->get();
        
        return view('client.detail_product')->with('product', $product);
    }


    //Built PC

    public function built_PC(){
        $product_cpu = DB::table('products')->where('product_status','1')->paginate(4);
        return view('client.built_PC.built_PC')->with('product_cpu', $product_cpu);
    }
    



    //Cart
    public function cart(){ 
        $carts = Session::get('cart');
        return view('client.cart_product.show_cart')->with('carts', $carts);
    }
    public function addToCart($product_id){
        // Session::forget('cart');
        
        $product = DB::table('products')->where('product_id', $product_id)->first();
        $cart = Session::get('cart');
        
        if(isset($cart[$product_id])){
            $cart[$product_id]['quantity'] = $cart[$product_id]['quantity'] + 1;
        }else{
            $cart[$product_id] = [
                
                'name' => $product->product_name,
                'price' => $product->product_price,
                'image' => $product->product_image,
                'insurance' => $product->product_insurance,
                'warehouse' =>  $product->product_quantity,
                'quantity' => 1,
            ];
        }
        Session::put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'Thêm sản phẩm thành công',
        ],status:200);
    }
    

    public function update_cart(Request $request ){
        if($request->id && $request->quantity){
            $carts = Session::get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            Session::put('cart', $carts);
            $carts = Session::get('cart');
            $cartComponent = view('client.cart_product.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent,'code' => 200 ], status:200);
        }
        
    }

    //Delete Cart
    public function delete_cart(Request $request){
        if($request->id){
            $carts = Session::get('cart');
            unset($carts[$request->id]);
            Session::put('cart', $carts);
            $carts = Session::get('cart');
            $cartComponent = view('client.cart_product.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent,'code' => 200 ], status:200);
        }
    }



    //Category product
    public function category(Request $request ,$category){
        $product = DB::table('products')->where('product_category', $category)->where('product_status', '1')->paginate(16);
        $product_categogy = DB::table('products')->where('product_category', $category)->first();

        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by=='giam_dan'){
                $product = DB::table('products')->where('product_category', $category)->where('product_status', '1')->orderBy('product_price','DESC')->paginate(16);
            }elseif($sort_by=='tang_dan'){
                $product = DB::table('products')->where('product_category', $category)->where('product_status', '1')->orderBy('product_price','ASC')->paginate(16);
            }elseif($sort_by=='kytu_za'){
                $product = DB::table('products')->where('product_category', $category)->where('product_status', '1')->orderBy('product_name','DESC')->paginate(16);
            }elseif($sort_by=='kytu_az'){
                $product = DB::table('products')->where('product_category', $category)->where('product_status', '1')->orderBy('product_name','ASC')->paginate(16);
            }elseif($sort_by=='moi_nhat'){
                $product = DB::table('products')->where('product_category', $category)->where('product_status', '1')->orderBy('product_id','DESC')->paginate(16);
            }else{
                $product = DB::table('products')->where('product_category', $category)->where('product_status', '1')->paginate(16);
            }
        }
        return view('client.category_product.show_category')->with('product',$product)->with('product_category',$product_categogy);
    }

    
}