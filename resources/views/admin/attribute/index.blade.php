@extends('admin.Master')

@section('main')

<div class="table-responsive">
    <table class="table table-dark table-striped table-bordered">
        <tr>
            <td class="text-center align-middle" >Id</td>
            <td class="text-center align-middle">Name</td>
            <td class="text-center align-middle">Attribute</td>
            <td class="text-center align-middle">Action</td>
        </tr>
        @foreach ($attibute as $item)
        <tr>
            <td class="text-center align-middle">{{$item->id}}</td>
            <td class="text-center align-middle">{{$item->name}}</td>
            <td class="text-center align-middle">{{$item->value}}</td>
            <td class="text-center align-middle">
                <form action="{{route('attribute.destroy', $item->id)}}" method="post">
                    @csrf @method('delete')
                    <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    <a class="btn btn-primary"  href="{{route('attribute.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                </form>
            </td>
            <
        </tr>
        @endforeach

    </table>
</div>


@stop