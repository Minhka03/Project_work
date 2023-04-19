@extends('admin.Master')

@section('main')


<h3 class="text-center">Danh mục sản phẩm</h3>
<div class="category-item" style="display: flex; align-items: center; margin-top: 40px; margin-bottom: 20px;">
    <a href="{{route('category.create')}}">
    <button class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"><span style="padding-left: 10px;"></span></i>Thêm mới danh mục</button>
    </a>
    <input type="text" class="form-control" style="display: inline-block; width: 300px; margin-left: 10px;" placeholder="Tìm kiếm">
    <button class="btn btn btn-success" style="margin-left: 5px;"><i class="fa fa-search" aria-hidden="true"></i></button>
</div>
<div class="table-responsive">
    <table class="table table-dark table-striped table-bordered ">
        <tr>
            <td class="text-center align-middle">Id</td>
            <td class="text-center align-middle">Tên</td>
            <td class="text-center align-middle">Trạng Thái</td>
            <td></td>
        </tr>
        @foreach ($category as $cate)
        <tr>
            <td class="text-center align-middle">{{$cate->id}}</td>
            <td class="text-center align-middle">{{$cate->name}}</td>
            <td class="text-center align-middle">{{$cate->status == 1 ? 'Hiển thị' : 'Ẩn đi'}}</td>
            <td>
                <form action="{{route('category.destroy', $cate->id)}}" method="post">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    <a href="{{route('category.edit', $cate->id)}}" class="btn btn-primary"><i class="fa fa-square" aria-hidden="true"></i></a>
                    <a href=""></a>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
</div>



@stop