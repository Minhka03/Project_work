<?php

namespace App\Http\Controllers;

use App\Models\Attribute as ModelsAttribute;
use App\Models\Category;
use App\Models\Product;
use Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Attribute as NodeAttribute;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();

        return view('admin.product.index' , compact('product'));


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

        $product_id = explode(",", $ids);
     
        Product::whereIn('id', $product_id )->update([
            'discount' => DB::raw(" price * $discount / 100")
        ]);

        
        return redirect()->back();

    }

    public function create(Product $product, Attribute $attribute )
    {   
       $category = Category::all();
       
       $attribute = ModelsAttribute::all();
       
       


    
        
        return view('admin.product.create', compact('category', 'attribute'));
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

        $form_data = $request->only('name' , 'content' , 'description', 'price' , 'discount' , 'status' , 'product_category_id' );

     
      
        // dd($attrs);



        if($request->has('image')) {
            $file_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads'), $file_name);
            $form_data['image'] = $file_name;
           
        };



         
        $product = Product::create($form_data);

        

        
        // $attrs = $request->value;
        // foreach($attrs as $key =>$value) {

        //     ModelsAttribute::create([

        //         'id' =>$product->id,
        //         'product_id' =>$value,

        //     ]);
        //   }

      

        

       

       


        

     
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       return view('admin.product_img.index' , compact('product'));
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
        // $product = Product::all();

        return view('admin.product.edit' , compact('product' , 'category'));
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
        $request->validate(
            
            [  'name' =>'required|max:255|unique:products',
               'content' =>'required',
               'description'=>'required',
               'price' =>'required|numeric|max:1000',
               'discount'=>'numeric|lte:price',
               'image' =>'required|mimes:jpg,png,jepg',
   
           ],
               
   
       
           [
                   'name.required' =>'Tên sản phẩm không được để trống',
                   'name.unique' =>'Tên sản phẩm đã tồn tại',
                   'content.required' => 'Nội dung không được để trống',
                   'description.required' =>'Nội dung không được để trống',
                   'price.required' =>'Giá sản phẩm không được để trống',
                   'price.max' =>'Giá sản phẩm tối thiểu là 1000 đô',
                   'price.nummeric' =>'Giá sản phẩm phải là số',
                   'discount.numeric' => 'Giá khuyến mại phải là số',
                   'discount.lte' => 'Giá khuyến mại phải nhỏ hơn giá sản phẩm ban đầu',
                   'image.required' =>'Ảnh sản phẩm không được để trống',
                   'image.mimes' =>'Đuôi file không hợp lệ',
   
           ]);
   
           $form_data = $request->only('name' , 'content' , 'description', 'price' , 'discount' , 'status' , 'product_category_id' );
   
         
               $file_name = $request->image->getClientOriginalName();
               $request->image->move(public_path('uploads'), $file_name);
               $form_data['image'] = $file_name;

         
           
          
   
           $product->update($form_data);
           return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $link = 'uploads'.'/'.$product->image;
        unlink($link);
        return redirect()->back();
    }
};

