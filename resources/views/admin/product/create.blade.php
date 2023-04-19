@extends('admin.Master')

@section('main')

<div class="products">
    <div class="container">
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="left">
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Tên</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            @error('name')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Danh mục</label>
                            <select name="product_category_id" class="form-control" id="">
                                @foreach ( $category as $cate )
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach

                            </select>

                        </div>
                        <div class="mb-3" class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Nội dung</label>
                            <input type="text" name="content" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            @error('content')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
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
                            <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            @error('price')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Giảm giá</label>
                            <input type="text" name="discount" id="" class="form-control" placeholde r="" aria-describedby="helpId">
                            @error('discount')
                            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Trạng thái</label>
                            <div class="status-category">
                                <div class="status" style="align-items: center; margin-bottom: 5px;">
                                    <input type="radio" value="1" name="status" checked><span style="margin-left: 10px !important;">Hiển thị</span>
                                </div>
                                <div class="status">
                                    <input type="radio" value="0" name="status"><span style="margin-left: 10px !important;">Ẩn đi</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px;">
                            <label for="" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" name="image" id="my_img" class="form-control" placeholder="" onchange="file_image()">
                            <img src="" id="image_preview" width="120px" style="margin-top: 10px;" alt="">
                            @error('image')
                            <small id="helpId" style="color: red;"  class="text-muted">{{$message}}</small>
                            @enderror
                        </div>


                        <div class="attribute">
                            <div class="mb-3">
                                <label for="" class="form-label" style="margin-right: 5px;">Color</label>
                                @foreach ($color as $item )
                                <input type="checkbox" value="{{$item->id}}" name="id_att[]" > <span ><i class="fa-solid fa-shirt" style="color: {{$item->value}}; padding: 0 5px;"></i></span>
                                @endforeach

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label" style="margin-right: 5px;" >Size</label>
                                @foreach ($size as $item )
                                <input  type="checkbox" value="{{$item->id}}" name="id_att[]"><span  style="padding: 5px 5px; font-size: 17px;">{{$item->value}}</span>
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