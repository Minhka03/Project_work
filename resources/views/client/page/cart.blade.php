@include('client.layout.header')


<div class="banner-cart">
    <div class="name-cart">
        <p class="name">Cart</p>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">/</a>
            </li>
            <li>
                <a href="">Shop</a>
            </li>
            <li>
                <a href="">/</a>
            </li>
            <li>
                <p class="text-cart">Cart</p>
            </li>
        </ul>
    </div>
</div>


<div class="table-cart">
    <div class="container">

        <div class="cart-product">
            <div class="row">
                <div class="item-cart none row">
                    <div class="col-lg-6">
                        <div class="name-product">
                            <p>Product</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="list-cart">

                            <div class="list">
                                <p class="text-center">Price</p>
                            </div>

                            <div class="list">
                                <p class="text-center">Quantity</p>
                            </div>

                            <div class="list">
                                <p class="text-center">Total</p>
                            </div>

                        </div>
                    </div>
                </div>
                <?php $total = 0;?>


                @foreach ($cart as $item )
                <?php 
                    $total += $item->price * $item->quantity;
                ?>      
                <div class="item-cart row ">

                    <div class="col-xl-6 col-lg-12 col-md-12 col-12 cart-border">

                        <div class="title_cart">
                            <img src="{{url('uploads')}}/{{$item->image}}" alt="">

                            <form action="{{route('cart.update_att', $item->id)}}" method="post">
                                @csrf
                                <div class="description-cart">
                                    <p class="name">{{$item->name}}</p>




                                    <p class="size">Size: <strong>

                                            <select name="att[]" class="att_size" id="">
                                                @foreach ($item->pro->pro_attribute as $value)

                                                @if ($value->name == 'size')
                                                <option value="{{$value->id}}" {{$item->cart_att->contains('id' , $value->id) ? 'selected' : ''}}>{{$value->value}}</option>

                                                <p style="color: blue;">{{$value->id}}</p>
                                                @endif
                                                @endforeach
                                            </select>

                                        </strong></p>






                                    <p class="color">Color: <strong>

                                            <select name="att[]" class="att_size" id="">

                                                @foreach ($item->pro->pro_attribute as $value)
                                                @if($value->name == 'color')
                                                <option value="{{$value->id}}" {{$item->cart_att->contains('id' , $value->id) ? 'selected' : ''}}>{{$value->value}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </strong>
                                    </p>
                                    <div class="icon-cart">

                                        <button href="" type="submit" class="btn btn-primary"><i class="fas fa-edit" style="color: #fff;"></i></button>
                                        <a href="{{route('cart.delete', $item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash-can" style="color: #fff;"></i></a>


                                    </div>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-12 cart-border">
                    <div class="list-cart">

                        <div class="list">
                            <p class="price-cart text-center">${{$item->price}}.00</p>
                        </div>

                        <div class="list">
                            <div class="quantity-cart">
                                <div style="position: relative;">
                                    <form action="{{route('cart.update_quantity', $item->id)}}" method="post" class="form-inline form-{{$item->id}}" role="form">
                                        @csrf
                                        <a class="minus" data-id="{{$item->id}}" class="btn btn-primary"><i class="fa-sharp fa-solid fa-minus"></i></a>
                                        <div class="form-group">
                                            <input type="text" class="btn-quantity quantity-input-{{$item->id}}" name="quantity" value="{{$item->quantity}}">
                                        </div>
                                        <a class="plus" data-id="{{$item->id}}" class="btn btn-primary"><i class="fa-sharp fa-solid fa-plus"></i></a>


                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="list">
                            <p class=" text-center">${{$item->price * $item->quantity}}.00</p>
                           
                        </div>

                    </div>
                </div>

            </div>
            @endforeach
            <div class="item-cart row ">

                <div class="col-xl-6 col-lg-12 col-md-12 col-12 cart-border">
                    <div class="list-item d-flex">
                        <a class="continue" href="{{route('home.product')}}">Continue shopping</a>
                        <a class="remove-cart d-flex">
                            <i class="fa-solid fa-xmark me-2"></i>
                            <p> CLEAR SHOPPING CART</p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 cart-border">
                    <div class="subtotal">
                        <p>Subtotal : <span>${{$total}}.00</span></p>
                    </div>
                </div>


            </div>








            <!-- <div class="item-cart  row">


                    <div class=" col-xl-6 col-lg-12 col-md-12 cart-border">
                        <div class="title_cart">
                            <img src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-130-405x510.jpg" alt="">
                            <div class="description-cart">
                                <p class="name"> Funnel collar puffer jacket </p>
                                <p>Size: <strong>M</strong></p>
                                <p>Color: <strong>Blue</strong></p>
                                <div class="icon-cart">
                                    <i class="fa-regular fa-pen-to-square me-2"></i>
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-6 col-lg-12 col-md-12 cart-border">
                        <div class="list-cart">

                            <div class="list">
                                <p class="price-cart text-center"> <del>$25.00</del>$20.00 </p>
                            </div>

                            <div class="list">
                                <div class="quantity-cart">
                                    <div style="position: relative;">
                                        <a href="" class="minus"><i class="fa-sharp fa-solid fa-minus"></i></a>
                                        <input type="text" class="btn-quantity" value="1">
                                        <a href="" class="plus"><i class="fa-sharp fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="list">
                                <p class=" text-center">100$</p>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
        <div class="div">
            <a class="check" href="">PROCEED TO CHECKOUT</a>
        </div>
    </div>

</div>
</div>


<script src="https://code.jquery.com/jquery.min.js"></script>
<script>
    var token = $('input[name="_token"]').val();
    $('.minus').click(function(ev) {
        ev.preventDefault();
        var id = $(this).data('id');
        var action = $('.form-' + id).attr('action');
        var quantity = parseInt($('.quantity-input-' + id).val());


        if (quantity > 1) {
            quantity -= 1;
            $('.quantity-input-' + id).val(quantity);
            $.ajax({
                url: action,
                type: 'POST',
                data: {
                    quantity: quantity,
                    _token: token
                },
                success: function(data) {

                }
            })
        }

    })

    $('.plus').click(function(ev) {
        ev.preventDefault();
        var id = $(this).data('id');
        var action = $('.form-' + id).attr('action');
        var quantity = parseInt($('.quantity-input-' + id).val());
        quantity += 1;
        $('.quantity-input-' + id).val(quantity);
        $.ajax({
            url: action,
            type: 'POST',
            data: {
                quantity: quantity,
                _token: token
            },
            success: function(data) {}
        })
        // alert(qtt);
    })


    // console.log(quantityInput);
</script>






@include('client.layout.footer')