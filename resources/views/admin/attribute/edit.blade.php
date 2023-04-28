@extends('admin.Master')

@section('main')

<div class="container">
    <form action="{{route('attribute.update', $attribute->id)}}" method="post">
        @csrf @method('PUT')
        <div class="attribute">
            <div class="mb-3" style="margin-bottom: 20px;">
                <label for="" class="form-label">Tên thuộc tính</label>
                <select name="name" class="form-control" onchange="Change_att(this)" style="width: 500px;">
                    <option value="color" {{$attribute->name == 'color' ? 'selected' : ''}} >Color</option>
                    <option value="size" {{$attribute->name == 'size' ? 'selected' : ''}}>Size</option>
                </select>
            </div>
            <div class="mb-3" style="margin-bottom: 20px;">
                <label for="">Giá trị</label>
                <input type="{{$attribute->name == 'color' ? 'color' : 'size'}}" name="value" id="value" value="{{$attribute->value}}" style="width: 500px;"  class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3" style="margin-bottom: 20px;">
                <label for="">Content</label>
                <input type="text" name="value" id="value" value="{{$attribute->content}}" style="width: 500px;"  class="form-control" placeholder="" aria-describedby="helpId">
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