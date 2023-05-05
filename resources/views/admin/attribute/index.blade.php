@extends('admin.Master')

@section('main')

<div class="table-responsive">
    <a href="{{route('attribute.create')  }}">
        <button class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"><span style="padding-left: 10px;"></span></i>Thêm mới danh mục</button>
    </a>
    <table class="table table-dark table-striped table-bordered">
        <tr>
            <td class="text-center align-middle">Id</td>
            <td class="text-center align-middle">Name</td>
            <td class="text-center align-middle">Attribute</td>
            <td class="text-center align-middle">Content</td>
            <td class="text-center align-middle">Action</td>
        </tr>
        @foreach ($attibute as $item)
        <tr>
            <td class="text-center align-middle">{{$item->id}}</td>
            <td class="text-center align-middle">{{$item->name}}</td>
            <td class="text-center align-middle">{{$item->value}}</td>
            <td class="text-center align-middle">{{$item->content}}</td>
            <td class="text-center align-middle">
                <form action="{{route('attribute.destroy', $item->id)}}" method="post">
                    @csrf @method('delete')
                    <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    <a class="btn btn-primary" href="{{route('attribute.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                </form>
            </td>
            < </tr>
                @endforeach

    </table>
</div>


@stop