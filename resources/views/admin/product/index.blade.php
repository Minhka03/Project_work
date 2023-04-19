@extends('admin.Master')


@section('main')
<h3 class="text-center">Sản phẩm</h3>
<div class="category-item" style="display: flex; justify-content: space-between; align-items: center; margin-top: 40px; margin-bottom: 20px;">
    <div style="display: flex; align-items: center;">
        <a href="{{route('product.create')}}">
            <button class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"><span style="padding-left: 10px;"></span></i>Thêm mới sản phẩm</button>
        </a>
        <form action="{{route('product.index')}}" style="display: flex; align-items: center;" method="get">
            <input type="text" name="keyword" class="form-control" style="display: inline-block; width: 300px; margin-left: 10px;" placeholder="Tìm kiếm">
            <button class="btn btn btn-success" style="margin-left: 5px;"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>

    </div>

    <form action="{{route('product.sale')}}" method="post" class="d-flex" style=" display: flex;align-items: center;">
        @csrf
        <input type="text" class="form-control" name="discount" style="display: inline-block; width: 300px; margin-left: 10px;" placeholder="Mã giảm giá">
        <button href="" style="margin-left: 10px;" class="btn btn-info">Coupons</button>
        
    </form>
</div>
<div class="table-responsive">
    <table class="table table-dark table-striped table-bordered ">
        <tr class="">
            <td class="text-center align-middle">Id</td>
            <td class="text-center align-middle">Tên</td>
            <td class="text-center align-middle">Danh mục</td>
            <td class="text-center align-middle">Giá / Giảm giá</td>
            <td class="text-center align-middle">Trạng thái</td>
            <td>Màu</td>
            <td>Kích thước</td>
            <td class="text-center align-middle">Ảnh sản phẩm</td>
            <td class="text-center align-middle">Action
            </td>
            <td></td>
        </tr>


        @foreach ($product as $pro)
        <tr>
            <td class="text-center align-middle" style="vertical-align: middle;">{{$pro->id}}</td>
            <td class="text-center align-middle" style="vertical-align: middle;">{{$pro->name}}</td>
            <td class="text-center align-middle" style="vertical-align: middle;">{{$pro->cate->name}}</td>
            <td class="text-center align-middle" style="vertical-align: middle;">{{$pro->price}}/<span>{{$pro->discount}}</span></td>
            <td class="text-center align-middle" style="vertical-align: middle;">{{$pro->status == 1 ? 'In Stock' : 'Out Stock'}}</td>
            <td class="text-center align-middle" style="vertical-align: middle;">
                @foreach ($pro->pro_att as $item )
                @if ($item->att->name == 'color')
                <span style="color: {{$item->att->value}}; padding: 0 5px;"><i class="fa-solid fa-shirt"></i></span>
                @endif

                @endforeach
            </td>
            <td class="text-center align-middle" style="vertical-align: middle;">
                @foreach ($pro->pro_att as $item )

                @if ($item->att->name == 'size')
                <span style="padding: 0 5px;">{{$item->att->value}}</span>
                @endif


                @endforeach

            </td>


            <td class="text-center align-middle" style="vertical-align: middle;">



                <img src="/uploads/{{$pro->image}}" width="100px" alt="">
            </td>


            <td class="text-center align-middle" style="vertical-align: middle;">
                <form action="{{route('product.destroy', $pro->id)}}" method="post">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    <a href="{{route('product.edit', $pro->id)}}" class="btn btn-primary"><i class="fa fa-square-o" aria-hidden="true"></i></a>
                    <a href="{{route('product.show', $pro->id)}}" class="btn btn-primary">Xem</i></a>
                </form>

            </td>
            <td class="text-center align-middle" style="vertical-align: middle;">
                <input type="checkbox" onchange="check_Coupons(this)" name="id" value="{{$pro->id}}">
            </td>
        </tr>




        @endforeach



    </table>



   


     <form method="POST" action="{{route('product.delete')}}" moethod="POST">
        @csrf
        @method('DELETE')

        <input type="hidden" id="checked" name="product_id">
        <button class="btn btn-danger" type="submit">Xóa sản phẩm đã chọn</button>
    </form>

    <nav class="page-navigation">
        {{$product->links()}}
    </nav>

   


</div>


<script>
    // let check = []
    // function check_Coupons(e) {
    //     let id = e.value
    //     // console.log(id);
    //     console.log(id);


    //    if (check.includes(id)) {
    //     let data  = check.filter ( (data) => data != id);
    //     check = data;   
    //     console.log(check);
    //    } else {
    //     check.push(id);

    //    }
    //    document.getElementById('checked').value = check;
    // //    console.log(check);
    // }

    let check = []

    function check_Coupons(e) {
        let id = e.value
        console.log(id);


        if (check.includes(id)) {
            let data = check.filter((data) => data != id);
            console.log(data);
            check = data;

        } else {
            check.push(id);
            console.log(check);
        }

        document.getElementById('checked').value = check;
    }

    // let check1 = [];

    // function check_Coupons(e) {
    //     let id = e.value
    //     console.log(id);


    //     if (check1.includes(id)) {
    //         let data = check1.filter((data) => data != id);
    //         console.log(data);
    //         check = data;

    //     } else {
    //         check.push(id);
    //         console.log(check1);
    //     }

    //     document.getElementById('checked1').value = check;
    // }
</script>


@stop