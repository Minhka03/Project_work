@extends('admin.Master')

@section('main')

<div class="container">
   
    <a  href="{{route('product.index')}}">
        <p class="btn btn-primary" style="margin: 20px 0;">Quay lại trang trước</p>
    </a>
   
   
    <form action="{{route('product_img.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" style="margin-bottom: 10px;">
        <label for="">Tên sản phẩm</label>
            <select name="name" id="" class="form-control"  style="width: 500px;" >
              @foreach ($product as $pro )
              <option value="{{$pro->id}}">{{$pro->name}}</option>
            
              @endforeach
            </select>
        </div>
        <div class="mb-3" style="margin-bottom: 10px;">
            <label for="" class="form-label">Thêm nhiều ảnh vào sản phẩm</label>
            <input type="file" name="image" id="my_img" class="form-control" placeholder=""  style="width: 500px;" onchange="file_image()" multiple >
            <img src="" id="image_preview" width="120px" style="margin-top: 10px;" alt="">
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


   
</script>

@stop