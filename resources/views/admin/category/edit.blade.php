@extends('admin.Master')

@section('main')

<div class="container">
    <h2 class="text-center">Sửa danh mục sản phẩm</h2>

    

    <section>
        <form action="{{route('category.update' , $category->id )}}" method="post" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Tên danh mục</label>
                <input type="text" value="{{$category->name}}" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('name')
                <small style="color: red; font-size: 15px;">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3" style="margin-bottom: 10px;">
                <label for="" class="form-label">Ảnh sản phẩm</label>
                <input type="file" name="image" id="my_img" class="form-control" placeholder="" onchange="file_image()">
                <img src="/uploads/category/{{$category->image}}" id="image_preview" width="120px" style="margin-top: 10px;" alt="">
            </div>
            <div class="mb-3" style="margin-top: 10px;">
                <label for="" class="form-label">Trạng thái</label>
                <div class="status-category">
                    <div class="status" style="align-items: center; margin-bottom: 5px;">
                        <input type="radio" value="1" name="status" {{$category->status == 1 ? 'checked' : '' }} checked><span style="margin-left: 10px !important;">Hiển thị</span>
                    </div>
                    <div class="status">
                        <input type="radio" value="0" name="status" {{$category->status == 0 ? 'checked' : '' }}><span style="margin-left: 10px !important;">Ẩn đi</span>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" style="margin-top: 10px;">Submit</button>
        </form>
    </section>
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