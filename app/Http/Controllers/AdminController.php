<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Console\Presets\React;
use App\Http\Requests;
use Illuminate\Support\Arr;
use Session, DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class AdminController extends Controller
{
    public function auth_login(){
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('admin-layout');
        }else{
            return Redirect::to('admin-login')->send();
        }
    }
    //Login
    public function admin_login(){ 
        return view('admin.admin_login');
    }
    

    public function admin_loginned(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        
        $result = DB::table('admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/admin-layout');
        }else{
            Session::put('message', 'Tài khoản hoặc mật khẩu sai!');
            return Redirect::to('/admin-login');
        }
    }

    public function admin_layout(){ 
        $this->auth_login();
        $all_product = DB::table('products')->where('product_status', 1)->orderby('products.product_id','desc')->paginate(6);
        return view('admin.dashboard')->with('all_product', $all_product);
    }

    //Add Product
    public function add_laptop(){ 
        $this->auth_login();
        return view('admin.add_product.add_laptop');
    }
    public function add_mainboard(){
        $this->auth_login();
       
        return view('admin.add_product.add_mainboard');
    }
    public function add_cpu(){
        $this->auth_login();
     
        return view('admin.add_product.add_cpu');
    }
    public function add_ram(){
        $this->auth_login();
      
        return view('admin.add_product.add_ram');
    }
    public function add_vga(){
        $this->auth_login();
        
        return view('admin.add_product.add_vga');
    }
    public function add_hd(){
        $this->auth_login();
        
        return view('admin.add_product.add_hd');
    }
    public function add_psu(){
        $this->auth_login();
        
        return view('admin.add_product.add_psu');
    }
    public function add_case(){
        $this->auth_login();
        
        return view('admin.add_product.add_case');
    }
    public function add_monitor(){
        $this->auth_login();
        
        return view('admin.add_product.add_monitor');
    }
    public function add_cooling(){
        $this->auth_login();
        
        return view('admin.add_product.add_cooling');
    }
    public function add_grear(){
        $this->auth_login();
        
        return view('admin.add_product.add_grear');
    }

    //save product
    public function save_laptop(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->laptop_category;
        $data['product_name'] = $request->laptop_name;
        $data['product_price'] = $request->laptop_price;
        $jsonDetail = array( 
            'brand'=> $request->laptop_brand,
            'cpu' => $request->laptop_cpu,
            'ram' => $request->laptop_ram,
            'vga' => $request->laptop_vga,
            'monitor' => $request->laptop_monitor,
            'memory' => $request->laptop_memory,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->laptop_insurance;
        $data['product_image'] = $request->laptop_image;
        $data['product_imgOther'] = $request->laptop_imgOther;
        $data['product_desc'] = $request->laptop_desc;
        $data['product_spec'] = $request->laptop_spec;
        $data['product_quantity'] = $request->laptop_quantity;
        $data['product_status'] = $request->laptop_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-laptop');
    }
    public function save_mainboard(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->mainboard_category;
        $data['product_name'] = $request->mainboard_name;
        $data['product_price'] = $request->mainboard_price;
        $jsonDetail = array( 
            'brand'=> $request->mainboard_brand,
            'cpu' => $request->mainboard_cpu,
            'chipset' => $request->mainboard_chipset,
            'size' => $request->mainboard_size,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->mainboard_insurance;
        $data['product_image'] = $request->mainboard_image;
        $data['product_imgOther'] = $request->mainboard_imgOther;
        $data['product_desc'] = $request->mainboard_desc;
        $data['product_spec'] = $request->mainboard_spec;
        $data['product_quantity'] = $request->mainboard_quantity;
        $data['product_status'] = $request->mainboard_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-mainboard');
    }
    
    public function save_cpu(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->cpu_category;
        $data['product_name'] = $request->cpu_name;
        $data['product_price'] = $request->cpu_price;
        $jsonDetail = array( 
            'brand'=> $request->cpu_brand,
            'core' => $request->cpu_core,
            'thread' => $request->cpu_thread,
            'type' => $request->cpu_type,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->cpu_insurance;
        $data['product_image'] = $request->cpu_image;
        $data['product_imgOther'] = $request->cpu_imgOther;
        $data['product_desc'] = $request->cpu_desc;
        $data['product_spec'] = $request->cpu_spec;
        $data['product_quantity'] = $request->cpu_quantity;
        $data['product_status'] = $request->cpu_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-cpu');
    }
    public function save_ram(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->ram_category;
        $data['product_name'] = $request->ram_name;
        $data['product_price'] = $request->ram_price;
        $jsonDetail = array( 
            'brand'=> $request->ram_brand,
            'memory' => $request->ram_memory,
            'bus' => $request->ram_bus,
            'type' => $request->ram_type,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->ram_insurance;
        $data['product_image'] = $request->ram_image;
        $data['product_imgOther'] = $request->ram_imgOther;
        $data['product_desc'] = $request->ram_desc;
        $data['product_spec'] = $request->ram_spec;
        $data['product_quantity'] = $request->ram_quantity;
        $data['product_status'] = $request->ram_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-ram');
    }
    
    public function save_vga(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->vga_category;
        $data['product_name'] = $request->vga_name;
        $data['product_price'] = $request->vga_price;
        $jsonDetail = array( 
            'brand'=> $request->vga_brand,
            'chipset' => $request->vga_chipset,
            'gpu' => $request->vga_gpu,
            'vram' => $request->vga_vram,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->vga_insurance;
        $data['product_image'] = $request->vga_image;
        $data['product_imgOther'] = $request->vga_imgOther;
        $data['product_desc'] = $request->vga_desc;
        $data['product_spec'] = $request->vga_spec;
        $data['product_quantity'] = $request->vga_quantity;
        $data['product_status'] = $request->vga_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-vga');
    }
    public function save_hd(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->hd_category;
        $data['product_name'] = $request->hd_name;
        $data['product_price'] = $request->hd_price;
        $jsonDetail = array( 
            'brand'=> $request->hd_brand,
            'type' => $request->hd_type,
            'memory' => $request->hd_memory,
            
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->hd_insurance;
        $data['product_image'] = $request->hd_image;
        $data['product_imgOther'] = $request->hd_imgOther;
        $data['product_desc'] = $request->hd_desc;
        $data['product_spec'] = $request->hd_spec;
        $data['product_quantity'] = $request->hd_quantity;
        $data['product_status'] = $request->hd_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-hd');
    }
    public function save_psu(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->psu_category;
        $data['product_name'] = $request->psu_name;
        $data['product_price'] = $request->psu_price;
        $jsonDetail = array( 
            'brand'=> $request->psu_brand,
            'wattage' => $request->psu_wattage,
            '80plus' => $request->psu_80plus,
            'type' => $request->psu_type,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->psu_insurance;
        $data['product_image'] = $request->psu_image;
        $data['product_imgOther'] = $request->psu_imgOther;
        $data['product_desc'] = $request->psu_desc;
        $data['product_spec'] = $request->psu_spec;
        $data['product_quantity'] = $request->psu_quantity;
        $data['product_status'] = $request->psu_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-psu');
    }
    public function save_case(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->case_category;
        $data['product_name'] = $request->case_name;
        $data['product_price'] = $request->case_price;
        $jsonDetail = array( 
            'brand'=> $request->case_brand,
            'size' => $request->case_size,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->case_insurance;
        $data['product_image'] = $request->case_image;
        $data['product_imgOther'] = $request->case_imgOther;
        $data['product_desc'] = $request->case_desc;
        $data['product_spec'] = $request->case_spec;
        $data['product_quantity'] = $request->case_quantity;
        $data['product_status'] = $request->case_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-case');
    }
    public function save_monitor(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->monitor_category;
        $data['product_name'] = $request->monitor_name;
        $data['product_price'] = $request->monitor_price;
        $jsonDetail = array( 
            'brand'=> $request->monitor_brand,
            'resolution' => $request->monitor_resolution,
            'size' => $request->monitor_size,
            'hz' => $request->monitor_hz,
            'bp' => $request->monitor_bp,
            'face' => $request->monitor_face,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->monitor_insurance;
        $data['product_image'] = $request->monitor_image;
        $data['product_imgOther'] = $request->monitor_imgOther;
        $data['product_desc'] = $request->monitor_desc;
        $data['product_spec'] = $request->monitor_spec;
        $data['product_quantity'] = $request->monitor_quantity;
        $data['product_status'] = $request->monitor_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-monitor');
    }
    public function save_cooling(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->cooling_category;
        $data['product_name'] = $request->cooling_name;
        $data['product_price'] = $request->cooling_price;
        $jsonDetail = array( 
            'brand'=> $request->cooling_brand,
            'type' => $request->cooling_type,
            'socket' => $request->cooling_socket,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->cooling_insurance;
        $data['product_image'] = $request->cooling_image;
        $data['product_imgOther'] = $request->cooling_imgOther;
        $data['product_desc'] = $request->cooling_desc;
        $data['product_spec'] = $request->cooling_spec;
        $data['product_quantity'] = $request->cooling_quantity;
        $data['product_status'] = $request->cooling_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-cooling');
    }
    public function save_grear(Request $request){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->grear_category;
        $data['product_name'] = $request->grear_name;
        $data['product_price'] = $request->grear_price;
        $jsonDetail = array( 
            'type' => $request->grear_type,
            'brand'=> $request->grear_brand,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->grear_insurance;
        $data['product_image'] = $request->grear_image;
        $data['product_imgOther'] = $request->grear_imgOther;
        $data['product_desc'] = $request->grear_desc;
        $data['product_spec'] = $request->grear_spec;
        $data['product_quantity'] = $request->grear_quantity;
        $data['product_status'] = $request->grear_status;
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-grear');
    }
    //Show product
    public function show_laptop(){ 
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'laptop')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_laptop')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_laptop', $manager_product);

    }
    public function show_mainboard(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'mainboard')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_mainboard')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_mainboard', $manager_product);
    }
    public function show_cpu(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'cpu')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_cpu')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_cpu', $manager_product);
    }
    public function show_ram(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'ram')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_ram')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_ram', $manager_product);
    }
    public function show_vga(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'vga')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_vga')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_vga', $manager_product);
    }
    public function show_hd(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'hd')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_hd')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_hd', $manager_product);
    }
    public function show_psu(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'psu')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_psu')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_psu', $manager_product);
    }
    public function show_case(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'case')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_case')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_case', $manager_product);
    }  
    public function show_monitor(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'monitor')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_monitor')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_monitor', $manager_product);
    }
    public function show_cooling(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'cooling')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_cooling')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_cooling', $manager_product);
    }
    public function show_grear(){
        $this->auth_login();
        $all_product = DB::table('products')->where('product_category', 'grear')->orderby('products.product_id','desc')->paginate(5);
        $manager_product = view('admin.show_product.show_grear')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.show_product.show_grear', $manager_product);
    }

    //Active product
    public function active_product($product_id){
        $this->auth_login();
        $product = tap(DB::table('products')->where('product_id', $product_id))->update(['product_status' => 1])->first();
        Session::put('message','Hiện sản phẩm thành công');
        return Redirect::to("show-".$product->product_category);
        
    }
    
    //Unactive product
    public function unactive_product($product_id){
        $this->auth_login();
        $product = tap(DB::table('products')->where('product_id', $product_id))->update(['product_status' => 0])->first();
        Session::put('message','Ẩn sản phẩm thành công');
        return Redirect::to("show-".$product->product_category);
    }

    //Edit product
    public function edit_laptop($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_laptop')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_laptop', $manager_product);
    }
    public function edit_mainboard($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_mainboard')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_mainboard', $manager_product);
    }
    public function edit_cpu($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_cpu')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_cpu', $manager_product);
    }
    public function edit_ram($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_ram')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_ram', $manager_product);
    }
    public function edit_vga($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_vga')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_vga', $manager_product);
    }
    public function edit_hd($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_hd')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_hd', $manager_product);
    }
    public function edit_psu($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_psu')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_psu', $manager_product);
    }
    public function edit_case($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_case')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_case', $manager_product);
    }
    public function edit_monitor($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_monitor')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_monitor', $manager_product);
    }
    public function edit_cooling($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_cooling')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_cooling', $manager_product);
    }
    public function edit_grear($product_id){
        $this->auth_login();
        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product = view('admin.edit_product.edit_grear')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_product.edit_grear', $manager_product);
    }


    //Update product
    public function update_laptop(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->laptop_category;
        $data['product_name'] = $request->laptop_name;
        $data['product_price'] = $request->laptop_price;
        $jsonDetail = array( 
            'brand'=> $request->laptop_brand,
            'cpu' => $request->laptop_cpu,
            'ram' => $request->laptop_ram,
            'vga' => $request->laptop_vga,
            'monitor' => $request->laptop_monitor,
            'memory' => $request->laptop_memory,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->laptop_insurance;
        $data['product_image'] = $request->laptop_image;
        $data['product_imgOther'] = $request->laptop_imgOther;
        $data['product_desc'] = $request->laptop_desc;
        $data['product_spec'] = $request->laptop_spec;
        $data['product_quantity'] = $request->laptop_quantity;
        $data['product_status'] = $request->laptop_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-laptop');
    }
    public function update_mainboard(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->mainboard_category;
        $data['product_name'] = $request->mainboard_name;
        $data['product_price'] = $request->mainboard_price;
        $jsonDetail = array( 
            'brand'=> $request->mainboard_brand,
            'cpu' => $request->mainboard_cpu,
            'chipset' => $request->mainboard_chipset,
            'size' => $request->mainboard_size,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->mainboard_insurance;
        $data['product_image'] = $request->mainboard_image;
        $data['product_imgOther'] = $request->mainboard_imgOther;
        $data['product_desc'] = $request->mainboard_desc;
        $data['product_spec'] = $request->mainboard_spec;
        $data['product_quantity'] = $request->mainboard_quantity;
        $data['product_status'] = $request->mainboard_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-mainboard');
    }
    
    public function update_cpu(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->cpu_category;
        $data['product_name'] = $request->cpu_name;
        $data['product_price'] = $request->cpu_price;
        $jsonDetail = array( 
            'brand'=> $request->cpu_brand,
            'core' => $request->cpu_core,
            'thread' => $request->cpu_thread,
            'type' => $request->cpu_type,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->cpu_insurance;
        $data['product_image'] = $request->cpu_image;
        $data['product_imgOther'] = $request->cpu_imgOther;
        $data['product_desc'] = $request->cpu_desc;
        $data['product_spec'] = $request->cpu_spec;
        $data['product_quantity'] = $request->cpu_quantity;
        $data['product_status'] = $request->cpu_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-cpu');
    }
    public function update_ram(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->ram_category;
        $data['product_name'] = $request->ram_name;
        $data['product_price'] = $request->ram_price;
        $jsonDetail = array( 
            'brand'=> $request->ram_brand,
            'memory' => $request->ram_memory,
            'bus' => $request->ram_bus,
            'type' => $request->ram_type,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->ram_insurance;
        $data['product_image'] = $request->ram_image;
        $data['product_imgOther'] = $request->ram_imgOther;
        $data['product_desc'] = $request->ram_desc;
        $data['product_spec'] = $request->ram_spec;
        $data['product_quantity'] = $request->ram_quantity;
        $data['product_status'] = $request->ram_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-ram');
    }
    
    public function update_vga(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->vga_category;
        $data['product_name'] = $request->vga_name;
        $data['product_price'] = $request->vga_price;
        $jsonDetail = array( 
            'brand'=> $request->vga_brand,
            'chipset' => $request->vga_chipset,
            'gpu' => $request->vga_gpu,
            'vram' => $request->vga_vram,
        );
        $data['product_details'] = json_encode($jsonDetail, $product_id); 
        $data['product_insurance'] = $request->vga_insurance;
        $data['product_image'] = $request->vga_image;
        $data['product_imgOther'] = $request->vga_imgOther;
        $data['product_desc'] = $request->vga_desc;
        $data['product_spec'] = $request->vga_spec;
        $data['product_quantity'] = $request->vga_quantity;
        $data['product_status'] = $request->vga_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-vga');
    }
    public function update_hd(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->hd_category;
        $data['product_name'] = $request->hd_name;
        $data['product_price'] = $request->hd_price;
        $jsonDetail = array( 
            'brand'=> $request->hd_brand,
            'type' => $request->hd_type,
            'memory' => $request->hd_memory,
            
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->hd_insurance;
        $data['product_image'] = $request->hd_image;
        $data['product_imgOther'] = $request->hd_imgOther;
        $data['product_desc'] = $request->hd_desc;
        $data['product_spec'] = $request->hd_spec;
        $data['product_quantity'] = $request->hd_quantity;
        $data['product_status'] = $request->hd_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-hd');
    }
    public function update_psu(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->psu_category;
        $data['product_name'] = $request->psu_name;
        $data['product_price'] = $request->psu_price;
        $jsonDetail = array( 
            'brand'=> $request->psu_brand,
            'wattage' => $request->psu_wattage,
            '80plus' => $request->psu_80plus,
            'type' => $request->psu_type,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->psu_insurance;
        $data['product_image'] = $request->psu_image;
        $data['product_imgOther'] = $request->psu_imgOther;
        $data['product_desc'] = $request->psu_desc;
        $data['product_spec'] = $request->psu_spec;
        $data['product_quantity'] = $request->psu_quantity;
        $data['product_status'] = $request->psu_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-psu');
    }
    public function update_case(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->case_category;
        $data['product_name'] = $request->case_name;
        $data['product_price'] = $request->case_price;
        $jsonDetail = array( 
            'brand'=> $request->case_brand,
            'size' => $request->case_size,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->case_insurance;
        $data['product_image'] = $request->case_image;
        $data['product_imgOther'] = $request->case_imgOther;
        $data['product_desc'] = $request->case_desc;
        $data['product_spec'] = $request->case_spec;
        $data['product_quantity'] = $request->case_quantity;
        $data['product_status'] = $request->case_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-case');
    }
    public function update_monitor(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->monitor_category;
        $data['product_name'] = $request->monitor_name;
        $data['product_price'] = $request->monitor_price;
        $jsonDetail = array( 
            'brand'=> $request->monitor_brand,
            'resolution' => $request->monitor_resolution,
            'size' => $request->monitor_size,
            'hz' => $request->monitor_hz,
            'bp' => $request->monitor_bp,
            'face' => $request->monitor_face,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->monitor_insurance;
        $data['product_image'] = $request->monitor_image;
        $data['product_imgOther'] = $request->monitor_imgOther;
        $data['product_desc'] = $request->monitor_desc;
        $data['product_spec'] = $request->monitor_spec;
        $data['product_quantity'] = $request->monitor_quantity;
        $data['product_status'] = $request->monitor_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-monitor');
    }
    public function update_cooling(Request $request, $product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->cooling_category;
        $data['product_name'] = $request->cooling_name;
        $data['product_price'] = $request->cooling_price;
        $jsonDetail = array( 
            'brand'=> $request->cooling_brand,
            'type' => $request->cooling_type,
            'socket' => $request->cooling_socket,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->cooling_insurance;
        $data['product_image'] = $request->cooling_image;
        $data['product_imgOther'] = $request->cooling_imgOther;
        $data['product_desc'] = $request->cooling_desc;
        $data['product_spec'] = $request->cooling_spec;
        $data['product_quantity'] = $request->cooling_quantity;
        $data['product_status'] = $request->cooling_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-cooling');
    }
    public function update_grear(Request $request,$product_id){ 
        $this->auth_login();
        $data = array();
        $data['product_category'] = $request->grear_category;
        $data['product_name'] = $request->grear_name;
        $data['product_price'] = $request->grear_price;
        $jsonDetail = array( 
            'type' => $request->grear_type,
            'brand'=> $request->grear_brand,
        );
        $data['product_details'] = json_encode($jsonDetail); 
        $data['product_insurance'] = $request->grear_insurance;
        $data['product_image'] = $request->grear_image;
        $data['product_imgOther'] = $request->grear_imgOther;
        $data['product_desc'] = $request->grear_desc;
        $data['product_spec'] = $request->grear_spec;
        $data['product_quantity'] = $request->grear_quantity;
        $data['product_status'] = $request->grear_status;
        DB::table('products')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('show-grear');
        
    }
    
    
    public function delete_product($product_id){
        $this->auth_login();
        $product = DB::table('products')->where('product_id', $product_id)->first();
        $category = $product->product_category;
        DB::table('products')->where('product_id', $product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to("show-".$category);
    }

    //User
    public function show_user(){
        $this->auth_login();
        $all_user = DB::table('users')->orderby('user_id','desc')->paginate(5);
        $manager_product = view('admin.user.show_user')->with('all_user',$all_user);
        return view('admin_layout')->with('admin.user.show_user', $manager_product);
        
    }
    public function edit_user($user_id){
        $this->auth_login();
        $edit_user = DB::table('users')->where('user_id',$user_id)->get();

        $manager_user = view('admin.user.edit_user')->with('edit_user',$edit_user);
        return view('admin_layout')->with('admin.user.edit_user', $manager_user);
    }
    public function update_user(Request $request, $user_id){ 
        $this->auth_login();
        $data = array();
        $data['user_email'] = $request->user_email;
        $data['user_name'] = $request->user_name;
        $data['user_phone'] = $request->user_phone;
        
        $data['user_sex'] =  $request->user_sex;
        $data['user_password'] = md5($request->user_password);
        $data['user_address'] = $request->user_address;
        DB::table('users')->where('user_id', $user_id)->update($data);
        Session::put('message','Cập nhật thông tin khách hàng thành công');
        return Redirect::to('/show-user');
    }
    public function delete_user($user_id){
        $this->auth_login();
        $user = DB::table('users')->where('user_id', $user_id)->first();
        DB::table('users')->where('user_id', $user_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to("/show-user");
    }
}
