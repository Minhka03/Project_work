<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function create () {
        return view('admin.account.register');
    }

    public function store(Request $req , Account $account )
    {
        // $req ->validate(
        //     // [   'name'=>'required',
        //     //     'email'=>'required|unique:account|email',
        //     //     'password'=>'required|min:8',
        //     //     'confirm_password'=>"required|same:password"
    
        //     // ],[
        //     //     'name.required'=>'Tên tài khoản không được để rỗng',
        //     //     'email.required'=>'Tên email không được để trống',
        //     //     'email.email'=>'Không đúng định dạng email',
        //     //     'password.required'=>'Password không được để trống',
        //     //     'password.min'=>'Password tối thiểu 8 kí tự',
        //     //     'confirm_password.required'=>'Confirm_password không được để trống',
        //     //     'confirm_password.min'=>'Confirm_password tối thiểu 8 kí tự'
        //     // ]
        // );  

        $form_data = $req->only('name' ,'email' , 'confirm_password');
        $form_data['password'] = bcrypt($req->password);

        // dd($form_data);
      
        User::create($form_data);
        return redirect()->route('admin.login');
    }


    public function login()
    {
        return view('admin.account.login');
    }

    public function check_login(Request $request)
    {
        // $this->validate($request , [
        //     'email'=>'required|email',
        //     'password' =>'required',
        // ],
        // [
        //     'email.required' => 'Bạn quên không nhập email',
        //     'email.email' => 'Sai định dạng email',
        //     'password.required' => 'Bạn quên không nhập mật khẩu'
        // ]);

    
        $form_data = $request->only('email', 'password');

        $check = Auth::attempt($form_data);
        

        // dd($check);

        if($check) {
            return redirect()->route('admin.index')->with('Bạn đã đăng nhập thành công trang admin');
        } 
        return  redirect()->back()->with('Tài khoản mật khẩu không chính xác');
    }

    public function logout()
    {
        Auth::logout();
       return redirect()->route('admin.login')->with('Bạn đã đăng xuất thành công');
    }

    


    public function index()
    {
        return view('admin.index');
    }
   
}
