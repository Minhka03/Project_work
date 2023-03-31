@extends('admin.Master')

@section('main')

<div class="container">

    <a href="{{route('product.index')}}">
        <p class="btn btn-primary" style="margin: 20px 0;">Quay lại trang trước</p>
    </a>


    <form action="{{route('product_img.update' , $product_img ->id )}}" method="post" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3" style="margin-bottom: 10px;">
            <label for="">Id</label>
            <input type="number"  name="product_id" value="{{$product_img->id}}" class="form-control" style="width: 100px;">

        </div>
        <div class="mb-3" style="margin-bottom: 10px;">
            <label for="" class="form-label">Thêm nhiều ảnh vào sản phẩm</label>
            <input type="file" name="image" id="my_img" class="form-control" placeholder="" style="width: 500px;" onchange="file_image()">
            <img src="{{url('uploads/imgs_product')}}/{{$product_img->images}}" id="image_preview" width="120px" style="margin-top: 10px;" alt="">
            @error('images')
            <small id="helpId" style="color: red;" class="text-muted">{{$message}}</small>
            @enderror
        </div>



        <button class="btn btn-primary">Submit</button>
    </form>
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


 
    function Change_att(a) {
        let name = a.value;
        document.getElementById('value').setAttribute('type', name == 'size' ? 'text' : 'color');
        document.getElementById('value').value = '';
    }

</script>

@stop