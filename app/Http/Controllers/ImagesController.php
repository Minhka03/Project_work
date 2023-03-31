<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Product;
use Faker\Core\File;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product_img.index' , compact('product'));
      
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $product = Product::all();
        return view('admin.product_img.create' , compact('product'));
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
            
        //     [   
        //         'images' => 'required|mimes:png,jpg,jepg',
        //     ],
            
        //     [
        //         'images.required' => 'Bạn chưa chọn ảnh',
        //         'images.mimes' => 'Đuôi file không hợp lệ',
        //     ]);

            $form_data = $request->only( 'product_id');
            
            $file_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/imgs_product'), $file_name);
            $form_data['images'] = $file_name;

            $img_product = Images::create($form_data);

            return redirect()->back();
        
          
                
             
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function edit(Images $product_img , Product $product)
    {   
        return view('admin.product_img.edit', compact('product' , 'product_img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Images $product_img)
    {
        
        $form_data = $request->only( 'product_id');
            
        $file_name = $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads/imgs_product'), $file_name);
        $form_data['images'] = $file_name;

        $product_img->update($form_data);

        return redirect()->back();
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images $product_img)
    {   
        
        $product_img->delete();
        $link = 'uploads/imgs_product'.'/'.$product_img->images;
        unlink($link);        
        return redirect()->back();   
    }
}
