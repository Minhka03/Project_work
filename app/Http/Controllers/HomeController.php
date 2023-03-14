<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
