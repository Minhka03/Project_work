@extends('admin.Master')

@section('main')

<div class="container">
    <form action="{{route('attribute.store')}}" method="post">
        @csrf
        <div class="attribute">
            <div class="mb-3">
              <label for="" class="form-label">Tên sản phẩm</label>
        
              <select name="product_id" class="form-control" style="width: 500px; margin-bottom: 20px;" id="">
                @foreach ($product as $prod)
                <option value="{{$prod->id}}">{{$prod->name}}</option>
                @endforeach
              
              </select>
            
            </div>
            <div class="mb-3" style="margin-bottom: 20px;">
                <label for="" class="form-label">Tên thuộc tính</label>
                <select name="name" class="form-control" onchange="Change_att(this)" style="width: 500px;" >

                    <option value="color">Color</option>
                    <option value="size">Size</option>
                </select>
            </div>
            <div class="mb-3" style="margin-bottom: 20px;">
                <label for="">Giá trị</label>
                <input type="color" name="value" id="value" style="width: 500px;"  class="form-control" placeholder="" aria-describedby="helpId">
            </div>

        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    function Change_att(a) {
        let name = a.value;
        document.getElementById('value').setAttribute('type', name == 'size' ? 'text' : 'color');
        document.getElementById('value').value = '';
    }
</script>

@stop