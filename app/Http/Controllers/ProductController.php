<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Images;
use App\Models\Product;
use App\Models\Product_Att;
use Attribute as GlobalAttribute;
use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Attribute as NodeAttribute;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {

        $product = Product::orderBy('id', 'ASC')->paginate(5);

        if ($request->keyword) {
            $product = Product::Where('name', 'like', '%' . $request->keyword . '%')
                ->orderBy('id', 'ASC')
                ->paginate(5);
        }



        return view('admin.product.index', compact('product'));


        // dd(Product::all()[1]); laays ra sanr phaame cu theer 
        // dd(Product::all()[1]->pro_att); lay ra mang san pham theo id cua san pham treen
        // dd(Product::all()[1]->pro_att[0]); lya r phan tu dau tien trong mang cua dong 30
        // dd(Product::all()[1]->pro_att[0]->att);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSale(Request $request)
    {

        $product = Product::all();



        $discount = $request->discount;


        $ids = $request->product_id;

        $ids = explode(",", $ids);
        Product::whereIn('id', $ids)->update([
            'discount' => DB::raw(" price * $discount / 100")
        ]);


        return redirect()->back();
    }

    public function create(Product $product, Attribute $attribute)
    {
        $category = Category::all();


        $color = Attribute::where('name', 'color')->get();
        $size = Attribute::where('name', 'size')->get();







        return view('admin.product.create', compact('category', 'color', 'size'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(

        //  [  'name' =>'required|max:255|unique:products',
        //     'content' =>'required',
        //     'description'=>'required',
        //     'price' =>'required|numeric|max:1000',
        //     'discount'=>'numeric|lte:price',
        //     'image' =>'required|mimes:jpg,png,jepg',

        // ],



        // [
        //         'name.required' =>'Tên sản phẩm không được để trống',
        //         'name.unique' =>'Tên sản phẩm đã tồn tại',
        //         'content.required' => 'Nội dung không được để trống',
        //         'description.required' =>'Nội dung không được để trống',
        //         'price.required' =>'Giá sản phẩm không được để trống',
        //         'price.max' =>'Giá sản phẩm tối thiểu là 1000 đô',
        //         'price.nummeric' =>'Giá sản phẩm phải là số',
        //         'discount.numeric' => 'Giá khuyến mại phải là số',
        //         'discount.lte' => 'Giá khuyến mại phải nhỏ hơn giá sản phẩm ban đầu',
        //         // 'image.required' =>'Ảnh sản phẩm không được để trống',
        //         // 'image.mimes' =>'Đuôi file không hợp lệ',

        // ]);

        $form_data = $request->only('name', 'content', 'description', 'price', 'discount', 'status', 'product_category_id');





        if ($request->has('image')) {
            $file_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads'), $file_name);
            $form_data['image'] = $file_name;
        };
        $product = Product::create($form_data);

        $product_att = $request->id_att;


        foreach ($product_att as $key => $value) {
            Product_Att::create([
                'id_pro' => $product->id,
                'id_att' => $value
            ]);
        }







        return redirect()->route('product.index')->with('yes' , 'Bạn thêm mới sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product_img.index', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)

    {
        $category = Category::all();
        $color = Attribute::where('name', 'color')->get();
        $size = Attribute::where('name', 'size')->get();
        // $product = Product::all();
        $product_att = $product->pro_attribute;

        return view('admin.product.edit', compact('product', 'category', 'color', 'size', 'product_att'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {


        // $request->validate(

        //     [  'name' =>'required|max:255|unique:products',
        //        'content' =>'required',
        //        'description'=>'required',
        //        'price' =>'required|numeric|max:1000',
        //        'discount'=>'numeric|lte:price',
        //    ],



        //    [
        //            'name.required' =>'Tên sản phẩm không được để trống',
        //            'name.unique' =>'Tên sản phẩm đã tồn tại',
        //            'content.required' => 'Nội dung không được để trống',
        //            'description.required' =>'Nội dung không được để trống',
        //            'price.required' =>'Giá sản phẩm không được để trống',
        //            'price.max' =>'Giá sản phẩm tối thiểu là 1000 đô',
        //            'price.nummeric' =>'Giá sản phẩm phải là số',
        //            'discount.numeric' => 'Giá khuyến mại phải là số',
        //            'discount.lte' => 'Giá khuyến mại phải nhỏ hơn giá sản phẩm ban đầu',

        //    ]);


        $pro_att = Product_Att::where('id_pro', $product->id)->get();

        foreach ($pro_att as $value) {
            $value->delete();
        }

        $product_att = $request->id_att;
        foreach ($product_att as $value) {
            Product_Att::create([
                'id_pro' => $product->id,
                'id_att' => $value
            ]);
        }








        $form_data = $request->only('name', 'content', 'description', 'price', 'discount', 'status', 'product_category_id');


        $file_name = $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads'), $file_name);
        $form_data['image'] = $file_name;







        $product->update($form_data);
        return redirect()->route('product.index')->with('yes' , 'Bạn thêm mới sản phẩm thành công'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Cart $cart)
    {


        try {
            $count = Cart::where('id_pro', $product->id)->count();


            if ($count > 0) {
                return redirect()->back()->with('no', 'Trong giỏ hàng đang có sản phẩm không thể xóa');
            }
            $product->delete();

            return redirect()->route('product.index')->with('yes', 'Xóa thành công');
        } catch (\Throwable $th) {


            $id_image = Images::where('product_id', $product->id)->get();
            foreach ($id_image as $key => $value) {
                $value->delete();
            }

            $idPro_att = Product_Att::where('id_pro', $product->id)->get();
            foreach ($idPro_att as $key => $value) {
                $value->delete();
            }

            $product->delete();
            return redirect()->back()->with('no', 'Bạn xóa thành công');
        }









        $product->delete();
        $link = 'uploads' . '/' . $product->image;
        unlink($link);
        return redirect()->back();
    }
};
