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
            <td class="text-center align-middle">Ảnh</td>
            <td class="text-center align-middle">Trạng Thái</td>
            <td></td>
        </tr>
        @foreach ($category as $cate)
        <tr>
            <td class="text-center align-middle" style="vertical-align: middle;">{{$cate->id}}</td>
            <td class="text-center align-middle" style="vertical-align: middle;">{{$cate->name}}</td>
            <td class="text-center align-middle" style="vertical-align: middle;"><img src="{{url('uploads/category')}}/{{$cate->image}}" alt="" width="100px"></td>
            <td class="text-center align-middle" style="vertical-align: middle;">{{$cate->status == 1 ? 'Hiển thị' : 'Ẩn đi'}}</td>
            <td class="text-center" style="vertical-align: middle;">

                <a href="{{route('category.edit', $cate->id)}}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>

                <a data-toggle="modal" id="smallButton" data-target="#delete{{$cate->id}}" data-attr="" href="" title="Delete category" class="btn btn-danger">
                    <i class="fa fa-trash "></i>
                </a>

                <div class="modal fade" id="delete{{$cate->id}}" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="smallBody">
                                <div>
                                    <!-- the result to be displayed apply here -->

                                    <form action="{{ route('category.destroy', $cate->id) }}" method="post">
                                        <div class="modal-body">
                                            @csrf @method('DELETE')
                                            <h5>Are you sure ???</h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Yes, Delete Category</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>

        </tr>
        @endforeach
    </table>
</div>




@stop