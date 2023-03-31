@extends('admin.Master')

@section('main')

<div class="container">
    <div class="table-responsive">
        <table class="table table-dark table-striped table-bordered ">

            <tr class="">
                <td class="text-center align-middle">Id</td>
                <td class="text-center align-middle">Tên</td>
                <td class="text-center align-middle">Danh mục</td>
                <td class="text-center align-middle">Giá / Giảm giá</td>
                <td class="text-center align-middle">Trạng thái</td>
                <td class="text-center align-middle">Màu</td>
                <td class="text-center align-middle">Size</td>
                <td class="text-center align-middle">Ảnh sản phẩm</td>
                <td class="text-center align-middle">
                </td>
            </tr>

            <tr>
                <td class="text-center align-middle" style="vertical-align: middle;">{{$product->id}}</td>
                <td class="text-center align-middle" style="vertical-align: middle;">{{$product->name}}</td>
                <td class="text-center align-middle" style="vertical-align: middle;">{{$product->cate->name}}</td>
                <td class="text-center align-middle" style="vertical-align: middle;">{{$product->price}}/<span>{{$product->discount}}</span></td>
                <td class="text-center align-middle" style="vertical-align: middle;">{{$product->status == 1 ? 'In Stock' : 'Out Stock'}}</td>
                <td class="text-center align-middle" style="vertical-align: middle;">
                    @foreach ($product->att as $item )
                    @if ($item->name == 'color')
                    {{$item->value}}<br>
                    @endif
                    @endforeach

                </td>
                <td class="text-center align-middle" style="vertical-align: middle;">

                    @foreach ($product->att as $item )
                    @if ($item->name == 'size')
                    {{$item->value}}<br>
                    @endif
                    @endforeach
                </td>
                <td class="text-center align-middle" style="vertical-align: middle;">
                    <img src="/uploads/{{$product->image}}" width="100px" alt="">
                </td>

                <td class="text-center align-middle" style="vertical-align: middle;">
                    <form action="{{route('product.destroy', $product->id)}}" method="post">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary"><i class="fa fa-square-o" aria-hidden="true"></i></a>
                        <a href="{{route('product_img.create')}}" class="btn btn-primary">Thêm ảnh</i></a>
                    </form>

                </td>





        </table>
        <div class="imgs">
            <h5 class="text-center" style="font-size: 20px; font-weight: 500;">Ảnh mô tả sản phẩm</h5>
            <div class="row" style="margin: 0; ">
                @foreach ($product->img as $img_product)
                <div class="col-lg-4" style="padding: 40px;">
                    <img src="{{url('uploads/imgs_product')}}/{{$img_product->images}}" width="100%" alt="">
                    <form action="{{route('product_img.destroy', $img_product->id)}}" class="text-center" method="post">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Bạn có muốn xóa không')" class="btn btn-danger" style="margin-top: 20px;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <a href="{{route('product_img.edit', $img_product->id)}}" class="btn btn-primary" style="margin-top: 20px;">Sửa</a>
                    </form>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>










@stop