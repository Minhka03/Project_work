<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $category =  Category::all();

        return view('admin.category.index' , compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $form_data = $request->only('name' , 'status');

          $request->validate(
            [
            'name' => 'required|unique:product_categories|max:255',
            ],
            [
                'name.required' =>'Tên không được để trống',
                'name.unique' => 'Tên này đã tồn tại'
            ]);

            $file_name = $request->image->getClientOriginalName();

            $request->image->move(public_path('uploads/category') , $file_name);
            $form_data['image'] = $file_name;

         Category::create($form_data);

         return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {   
        
        return view('admin.category.edit' , compact('category'));
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
      

        $request->validate(
            [

            'name' => 'required' ,
            'unique:product_categories'.$category->id,
            'max:255',
            ],
         
         
            [
                'name.required' =>'Tên không được để trống',
                'name.unique' => 'Tên này đã tồn tại'
            ]);
            $form_data = $request->only('name' ,'status');

            $file_name = $request->image->getClientOriginalName();

            $request->image->move(public_path('uploads/category') , $file_name);
            $form_data['image'] = $file_name;


                $category->update($form_data);

                return redirect()->route('category.index')->with('yes' , 'Sửa danh mục sản phẩm thành công');
           

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        try {
            $count = Product::where('product_category_id', $category->id)->count();
            
            if($count > 0){
                return redirect()->back()->with('no', 'Danh mục đang có sản phẩm không thể xóa');
            }
            $category->delete();

            return redirect()->route('category.index')->with('yes', 'Xóa thành công');
        } catch (\Throwable $th) {  
            return redirect()->back()->with('no', 'Delete Failed');
        }

       
    }
}
