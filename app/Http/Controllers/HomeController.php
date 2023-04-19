<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;

// use Auth;

class HomeController extends Controller   
{
    public function index()  
    {
        return view('client.page.home');      
    }
    
    public function detail() {
        return view('client.page.detail'); 
    }
    public function product() {
        return view('client.page.product');
    }
    public function cart() {
        return view('client.page.cart');
    }
    public function blog() {
        return view('client.page.blog');
    }
    public function about() {
        return view('client.page.about');
    }
    public function contact() {
        return view('client.page.contact');
    }
    public function register()
    {
      return view('client.form.register');
    }

    public function check_register(Request $request)
    {
        $form_data = $request->only('name',
        'email',
        'password',
        'confirm_password');

        $form_data['password'] = bcrypt($request->password);

        Customer::create($form_data);

        return redirect()->route('client.form.login');
    }
    public function login()
    {
      return view('client.form.login');
    }


    public function check_login(Request $request)
    {
        $form_data = $request->only('email', 'password');
        
        $check = Auth::guard('cus')->attempt($form_data);

        if($check) {
        return redirect()->route('home.index')->with( 'yes', 'Chào mừng bạn đến với trang chủ của shop');
    }
        return redirect()->back()->with( 'no' , 'Bạn nhập sai tên tài và mật khẩu tài khoản');
    }

    public function logout() {
        Auth::guard('cus')->logout();
        return redirect()->route('home.login')->with( 'no' , 'Bạn đã đăng xuất thành công, vui lòng đăng nhập lại ');
    }
   

    

}
