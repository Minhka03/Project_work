<?php

namespace App\Http\Controllers;

use App\Models\Attribute as ModelsAttribute;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Attribute;
use Attribute as GlobalAttribute;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

// use Auth;

class HomeController extends Controller
{
    public function index()
    {

        $category = Category::all();

        $product_best = Product::inRandomOrder()->limit(10)->get();

        $product_new =  Product::inRandomOrder()->limit(10)->get();

        $product_sale = Product::inRandomOrder()->limit(10)->get();






        return view('client.page.home', compact('category', 'product_best', 'product_new', 'product_sale'));
    }

    public function detail(Product $product)
    {



        return view('client.page.detail', compact('product'));
    }


    public function product(Product  $product, Request $request)
    {


        $product_query = Product::query();
        $product = Product::paginate(10);

        $min_price1 = request()->min_price1;
        $max_price1 = request()->max_price1;
        if ($min_price1 && $max_price1) {
            $product =  $product_query->whereBetween('price', [$min_price1, $max_price1])->get();
        }


        $min_price2 = request()->min_price2;
        $max_price2 = request()->max_price2;

        if ($min_price2 && $max_price2) {
            $product =  $product_query->whereBetween('price', [$min_price2, $max_price2])->get();
        }


        $min_price3 = request()->min_price3;
        $max_price3 = request()->max_price3;

        if ($min_price3 && $max_price3) {
            $product =  $product_query->whereBetween('price', [$min_price3, $max_price3])->get();
        }





        $colors = Attribute::where('name', 'color')->get();
        $sizes = Attribute::where('name', 'size')->get();
        $color = $request->color;
        $size = $request->size;



        if ($size) {
            $product = $product_query->whereHas('pro_attribute', function ($query) use ($size) {
                $query->where('name', 'size')->where('attributes.id', $size);
            })->get();
        }



        if ($color) {

            $product = $product_query->whereHas('pro_attribute', function ($query) use ($color) {
                $query->where('name', 'color')->where('attributes.id', $color);
            })->get();
        }


        $sort = request()->sort;


        switch ($sort) {


            case 'asc':
                $product = $product_query->orderBy('name', 'ASC')->get();
                break;
            case 'desc':
                $product = $product_query->orderBy('name', 'DESC')->get();
                break;
            case 'lowToHigh':
               $product =  $product_query->orderBy('price', 'ASC')->get();
                break;
            case 'HighToLow':
                $product =  $product_query->orderBy('price', 'DESC')->get();
                break;


            default:
              
            return view('client.page.product', compact('product', 'colors', 'sizes'));
        }




        return view('client.page.product', compact('product', 'colors', 'sizes'));
    }

    public function fillter_Category(Category $category)
    {


        $fillter_cate = Product::where('product_category_id', $category->id)->get();



        return view('client.page.fillter_product', compact('fillter_cate', 'category'));
    }


    public function cart()
    {
        return view('client.page.cart');
    }
    public function blog()
    {
        return view('client.page.blog');
    }
    public function about()
    {
        return view('client.page.about');
    }
    public function contact()
    {
        return view('client.page.contact');
    }
    public function register()
    {
        return view('client.form.register');
    }

    public function check_register(Request $request)
    {
        $form_data = $request->only(
            'name',
            'email',
            'password',
            'confirm_password'
        );

        $form_data['password'] = bcrypt($request->password);

        Customer::create($form_data);

        return redirect()->route('home.login');
    }
    public function login()
    {
        return view('client.form.login');
    }


    public function check_login(Request $request)
    {
        $form_data = $request->only('email', 'password');

        $check = Auth::guard('cus')->attempt($form_data);

        if ($check) {
            return redirect()->route('home.index')->with('yes', 'Chào mừng bạn đến với trang chủ của shop');
        }
        return redirect()->back()->with('no', 'Bạn nhập sai tên tài và mật khẩu tài khoản');
    }

    public function logout()
    {
        Auth::guard('cus')->logout();
        return redirect()->route('home.login')->with('no', 'Bạn đã đăng xuất thành công, vui lòng đăng nhập lại ');
    }


    public function check_price(Product $product)
    {
    }
}
