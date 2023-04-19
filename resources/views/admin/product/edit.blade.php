@extends('admin.Master')

@section('main')

<div class="products">
    <div class="container">
    <h2 class="text-center">Sửa sản phẩm</h2>
        <form action="{{route('product.update' , $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="left">
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Tên</label>
                            <input type="text" name="name" value="{{$product->name}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            @error('name')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Danh mục</label>
                            <select name="product_category_id" class="form-control" id="">
                                @foreach ( $category as $cate )
                                <option value="{{$cate->id}}" {{$product->product_category_id == $cate->id ? 'selected' : ''}} >{{$cate->name}}</option>
                                @endforeach

                            </select>

                        </div>
                        <div class="mb-3" class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Nội dung</label>
                            <input type="text" value="{{$product->content}}" name="content" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            @error('content')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả</label>
                            <textarea name="description"  class="form-control" id="" cols="30" rows="10"> {{$product->description}}</textarea>
                            @error('description')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" col-lg-6">
                    <div class="right">
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Giá tiền</label>
                            <input type="text" name="price" value="{{$product->price}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            @error('price')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Giảm giá</label>
                            <input type="text" name="discount" value="{{$product->discount}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            @error('discount')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Trạng thái</label>
                            <div class="status-category">
                                <div class="status" style="align-items: center; margin-bottom: 5px;">
                                    <input type="radio" value="1" name="status" {{$product->status == 1 ? 'checked' : ''}} ><span style="margin-left: 10px !important;">Hiển thị</span>
                                </div>
                                <div class="status">
                                    <input type="radio" value="0" name="status" {{$product->status == 0 ? 'checked' : ''}} ><span style="margin-left: 10px !important;">Ẩn đi</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" name="image" id="my_img" class="form-control" placeholder="" onchange="file_image()">
                            <img src="{{url('uploads')}}/{{$product->image}}" id="image_preview"  width="120px" style="margin-top: 10px;" alt="">
                            @error('image')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror

                        </div>

                        
                        <div class="attribute">
                            <div class="mb-3">
                                <label for="" class="form-label" style="margin-right: 5px;">Color</label>
                                @foreach ($color as $item )
                                <input type="checkbox" value="{{$item->id}}" name="id_att[]" {{$product_att->contains('id', $item->id) ? 'checked' : ''}}> <span ><i class="fa-solid fa-shirt" style="color: {{$item->value}}; padding: 0 5px;"></i></span>
                                @endforeach

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label" style="margin-right: 5px;" >Size</label>
                                @foreach ($size as $item )
                                <input  type="checkbox" value="{{$item->id}}" name="id_att[]" {{$product_att->contains('id', $item->id) ? 'checked' : ''}}><span  style="padding: 5px 5px; font-size: 17px;">{{$item->value}}</span>
                                @endforeach

                            </div>
                        
                        </div>


                       

                        
                      
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" style="margin: 20px auto !important ; display: inline-block;text-align: center;">Submit</button>
        </form>
    </div>
</div>


<script>
    function file_image() {
        var file = document.getElementById('my_img').files[0]
        var fr = new FileReader()
        fr.readAsDataURL(file)
        fr.onload = function(e) {
            var img = document.getElementById('image_preview');
            img.src = this.result;
        }
    }
</script>


@stop