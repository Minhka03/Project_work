@include('client.layout.header')


<div class="detail-shop">
    <div class="container">
        <div class="detail-shop-item">




            <div class="name-detail ">

                <ul class="item-name-detail">
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
                        <p class="name-category" href="">Short Jeans</p>
                    </li>
                </ul>
                <ul class="item-redirect">
                    <li>
                        <a href="">
                            <i class="fa-sharp fa-solid fa-arrow-left"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class=" col-xl-5 col-lg-5 col-md-5  col-sm-12">
                    <form action="{{route('cart.add', $product->id)}}" method="post">
                        @csrf
                    <div class="detail-img">
                        <div class="swiper mySwiper2 detail-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{url('uploads')}}/{{$product->image}}" />
                                </div>
                                <div class="swiper-slide">
                                    @foreach ($product->img as $item )
                                    <img src="{{url('uploads/imgs_product')}}/{{$item->images}}" />
                                    @endforeach


                                </div>
                                <div class="swiper-slide">
                                    <img src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-89-570x760.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-89-570x760.jpg" />
                                </div>

                            </div>
                            <!-- <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div> -->
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper swiper-thumb">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide p-2">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide p-2">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide p-2">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide p-2">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                                <div class="swiper-slide p-2">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="description">
                        <div class="item-up">
                            <div class="card-body">
                                <h4 class="card-title">{{$product->name}}</h4>
                                <p class="card-text">${{$product->price}}.00</p>
                                <p class="card-description">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur erit qui in ea voluptate</p>
                            </div>
                        </div>
                        <div class="item-midlle">
                            <div class="detail-option">
                                <div class="size">
                                    <div class="name">
                                        <p>Size</p>
                                    </div>
                                    <select class="design ms-2" name="att[]" id="">

                                      

                                        @foreach ($product->pro_attribute as $item )
                                        @if ($item->name == 'size')
                                        <option class="" name="" value="{{$item->id}}">{{$item->value}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="color">
                                    <div class="name">
                                        <p>Color</p>
                                    </div>
                                    <select class="design" name="att[]" id="">
                                        @foreach ($product->pro_attribute as $item )
                                        @if ($item->name == 'color')
                                        <option class="" value="{{$item->id}}">{{$item->content}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="detail-quantity">
                                <div class="quantity-inner d-flex">
                                    <button type="button" class="btn-number icon-minus" onclick="decreaseQuantity()"><i class="fa-sharp fa-solid fa-minus"></i></button>
                                    <input class="item-1" value="1" id="quantity-input" name="quantity" type="text">
                                    <button type="button" class="btn-number1 icon-plus" onclick="increaseQuantity()" href=" "><i class="fa-sharp fa-regular fa-plus"></i></button>
                                </div>
                                
                                <button class="item-2" type="submit">Add to cart</button>

                            </div>





                        </div>
                        <div class="item-end">
                            <div class="categories-name d-flex">
                                <p class="cate">Category <span>:</span> </p>
                                <p><a href="">Shirt</a>, <a href="" class="ms-2">Trend</a>, <a href="" class="ms-2">Woman</a></p>
                            </div>
                            <div class="tags d-flex">
                                <p class="tags_name">Tags<span>:</span></p>
                                <p><a href="">girl</a>,<a href="" class="ms-2">shirt</a></p>
                            </div>
                            <div class="share d-flex">
                                <p class="name_share">Share <span>:</span></p>
                                <div class="icon-share">
                                    <a href=""> <i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""> <i class="fa-brands fa-twitter"></i></a>
                                    <a href=""> <i class="fa-brands fa-google-plus-g"></i></a>
                                    <a href=""> <i class="fa-brands fa-linkedin"></i></a>
                                    <a href=""><i class="fa-brands fa-pinterest"></i> </a>
                                </div>
                            </div>
                            <button class="list_cart">Browse Wishlist</button>
                        </div>

                    </div>
                </div>
                </form>
            </div>

            <div class="description-detail">
                <p class="name">Description</p>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sed voluptas voluptatibus placeat delectus atque rem vel? Corporis impedit earum beatae asperiores aliquam est cumque minus, veniam a, provident maiores!
                    Lorem ipsum dolor sit.
                </p>
            </div>

            <div class="related-products">
                <div class="name">
                    <p>Related products</p>
                </div>
                <div class="products">
                    <div class="swiper mySwiper swiper-product">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-178-405x510.jpg" alt="Title">
                                    <img class="img-change" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-177-405x510.jpg" alt="Title">
                                    <div class="card-body">
                                        <p class="card-title">Thin Coat Lightly</p>
                                        <p class="card-text">$88.00 – $89.00</p>
                                    </div>
                                    <div class="product-icons">
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                        <a class="item-icon me-3 ms-3 me-md-1 ms-md-1" href="">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-heart">
                                        <a href="">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-178-405x510.jpg" alt="Title">
                                    <img class="img-change" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-177-405x510.jpg" alt="Title">
                                    <div class="card-body">
                                        <p class="card-title">Thin Coat Lightly</p>
                                        <p class="card-text">$88.00 – $89.00</p>
                                    </div>
                                    <div class="product-icons">
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                        <a class="item-icon me-3 ms-3 me-md-1 ms-md-1" href="">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-heart">
                                        <a href="">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-178-405x510.jpg" alt="Title">
                                    <img class="img-change" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-177-405x510.jpg" alt="Title">
                                    <div class="card-body">
                                        <p class="card-title">Thin Coat Lightly</p>
                                        <p class="card-text">$88.00 – $89.00</p>
                                    </div>
                                    <div class="product-icons">
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                        <a class="item-icon me-3 ms-3 me-md-1 ms-md-1" href="">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-heart">
                                        <a href="">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-178-405x510.jpg" alt="Title">
                                    <img class="img-change" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-177-405x510.jpg" alt="Title">
                                    <div class="card-body">
                                        <p class="card-title">Thin Coat Lightly</p>
                                        <p class="card-text">$88.00 – $89.00</p>
                                    </div>
                                    <div class="product-icons">
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                        <a class="item-icon me-3 ms-3 me-md-1 ms-md-1" href="">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-heart">
                                        <a href="">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-178-405x510.jpg" alt="Title">
                                    <img class="img-change" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-177-405x510.jpg" alt="Title">
                                    <div class="card-body">
                                        <p class="card-title">Thin Coat Lightly</p>
                                        <p class="card-text">$88.00 – $89.00</p>
                                    </div>
                                    <div class="product-icons">
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                        <a class="item-icon me-3 ms-3 me-md-1 ms-md-1" href="">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-heart">
                                        <a href="">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-178-405x510.jpg" alt="Title">
                                    <img class="img-change" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-177-405x510.jpg" alt="Title">
                                    <div class="card-body">
                                        <p class="card-title">Thin Coat Lightly</p>
                                        <p class="card-text">$88.00 – $89.00</p>
                                    </div>
                                    <div class="product-icons">
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                        <a class="item-icon me-3 ms-3 me-md-1 ms-md-1" href="">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a class="item-icon" href="">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-heart">
                                        <a href="">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    let quantityInput = document.querySelector("#quantity-input");
    let quantity = parseInt(quantityInput.value);

    quantityInput.addEventListener("change", function() {
        quantity = parseInt(quantityInput.value);
        if (isNaN(quantity)) {
            quantity = 1;
        }
        updateQuantityDisplay();
    });

    function increaseQuantity() {
        quantity += 1;
        quantityInput.value = quantity.toString();
    }

    function decreaseQuantity() {
        if (quantity > 1) {
            quantity -= 1;
            quantityInput.value = quantity.toString();

        }
    }
</script>


@include('client.layout.footer')