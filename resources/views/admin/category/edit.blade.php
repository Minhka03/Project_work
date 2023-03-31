@extends('admin.Master')

@section('main')

<div class="container">
    <h2 class="text-center">Sửa danh mục sản phẩm</h2>

    <section>
        <form action="{{route('category.update' , $category->id )}}" method="post" >
    @csrf @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Tên danh mục</label>
                <input type="text"  value="{{$category->name}}" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('name')
                    <small style="color: red; font-size: 15px;">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3" style="margin-top: 10px;">
                <label for="" class="form-label">Trạng thái</label>
                <div class="status-category">
                    <div class="status" style="align-items: center; margin-bottom: 5px;">
                        <input type="radio" value="1" name="status" {{$category->status == 1 ? 'checked' : '' }} checked ><span style="margin-left: 10px !important;">Hiển thị</span>
                    </div>
                    <div class="status">
                        <input  type="radio" value="0" name="status" {{$category->status == 0 ? 'checked' : '' }} ><span style="margin-left: 10px !important;">Ẩn đi</span>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" style="margin-top: 10px;">Submit</button>
        </form>
    </section>
</div>


@stop