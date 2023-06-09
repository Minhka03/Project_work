@include('client.layout.header')


<div id="carouselExampleFade" class="carousel slide carousel-fade carousel-reletive" data-bs-ride="carousel">
    @if (Session::has('no'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('no')}}
    </div>
    @endif

    @if (Session::has('yes'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('yes')}}
    </div>
    @endif

    <div class="carousel-inner" style="height: 100vh;">
        <div class="carousel-item active " style="height: 100vh;">
            <img src="https://themes.g5plus.net/april/wp-content/uploads/revslider/slider-05/slider-20.jpg" alt="...">

            <div class="banner-animation  ">

                <img class="slide-top" src="https://themes.g5plus.net/april/wp-content/uploads/revslider/slider-05/slider-22.png" alt="">
            </div>
            <div class=" slide-top  text-banner ">
                <h2>spring</h2>
                <p>2023</p>
            </div>
            <div class=" slide-top  btn_banner w-100  text-center">
                <!-- <div class="d-flex flex-wrap "> -->
                <div class="btn_banner_1 ">
                    <a>Learn more</a>
                </div>
                <div class="btn_banner_2">
                    <a href="{{route('home.product')}}">Shop Now</a>
                </div>
                <!-- </div> -->

            </div>

            <div class="move ">
                <div class="move-left " data-bs-target="#carouselExampleFade" data-bs-slide="prev"><i class="fa-solid fa-chevron-up"></i></div>

                <div class="move-right" data-bs-target="#carouselExampleFade" data-bs-slide="next"><i class="fa-solid fa-chevron-up"></i></div>
            </div>

        </div>



        <div class="carousel-item" style="height: 100vh;">
            <img src="https://themes.g5plus.net/april/wp-content/uploads/revslider/slider-05/slider-26.jpg" alt="...">
            <div class="banner-animation">

                <img class="slide-top" src="https://themes.g5plus.net/april/wp-content/uploads/revslider/slider-05/slider-24.png" alt="">
            </div>
            <div class="  slide-top  text-banner">
                <h2>spring</h2>
                <p>2023</p>
            </div>
            <div class="btn_banner slide-top   w-100  text-center">
                <!-- <div class="d-flex flex-wrap "> -->
                <div class="btn_banner_1">
                    <a>Learn more</a>
                </div>
                <div class="btn_banner_2">
                    <a>Shop Now</a>
                </div>
                <!-- </div> -->

            </div>

            <div class="move">
                <div class="move-left " data-bs-target="#carouselExampleFade" data-bs-slide="prev"><i class="fa-solid fa-chevron-up"></i></div>

                <div class="move-right" data-bs-target="#carouselExampleFade" data-bs-slide="next"><i class="fa-solid fa-chevron-up"></i></div>
            </div>
        </div>


        <<div class="carousel-item " style="height: 100vh;">
            <img src="https://themes.g5plus.net/april/wp-content/uploads/revslider/slider-05/slider-27.jpg" alt="...">
            <div class="banner-animation">

                <img class="slide-top" src="https://themes.g5plus.net/april/wp-content/uploads/revslider/slider-05/slider-25.png" alt="">
            </div>
            <div class="  slide-top  text-banner">
                <h2>spring</h2>
                <p>2023</p>
            </div>
            <div class="btn_banner slide-top   w-100 text-center">
                <!-- <div class="d-flex flex-wrap "> -->
                <div class="btn_banner_1">
                    <a>Learn more</a>
                </div>
                <div class="btn_banner_2">
                    <a>Shop Now</a>
                </div>
                <!-- </div> -->

            </div>

            <div class="move ">
                <div class="move-left " data-bs-target="#carouselExampleFade" data-bs-slide="prev"><i class="fa-solid fa-chevron-up"></i></div>

                <div class="move-right" data-bs-target="#carouselExampleFade" data-bs-slide="next"><i class="fa-solid fa-chevron-up"></i></div>
            </div>
    </div>
</div>

</div>


<div class="banner-category">
    <div class="container">


        <div class="banner-text-cate ">
            <h3>#april.store</h3>

        </div>
        <div class="get-cate">
            <div class="row">
                @foreach ($category as $cate)

                @if ($cate->status == '1')
                <div class="col-lg-6 col-md-6  cate-asolute">
                    <a href="{{route('home.fillter_category', $cate->id)}}">
                        <div class="content-cate">
                            <img src="uploads/category/{{$cate->image}}" alt="">

                            <div class="cate-text">
                                <a class="item-text" href="">#{{ $cate->name }}</a>
                                <p class="items">{{$cate->product_cate->count()}}item</p>
                            </div>
                        </div>
                    </a>
                </div>
                @else

                <div class="col-lg-6 col-md-6  cate-asolute ">
                    <a href="{{route('home.fillter_category', $cate->id)}}">
                        <div class="content-cate design-cate">
                            <img src="https://themes.g5plus.net/april/wp-content/uploads/2017/08/shop-category-04.jpg" alt="">
                            <div class="cate-text">
                                <a class="item-text" href="">#{{$cate->name}}</a>
                                <p class="items">{{$cate->product_cate->count()}}item</p>
                            </div>
                        </div>
                    </a>
                </div>

                @endif

                @endforeach

            </div>


            <div class="banner-newarrivals">
                <a href="{{route('home.product')}}">
                    <div class="arrivals-img">


                        <img src="https://themes.g5plus.net/april/wp-content/uploads/2017/08/shop-category-05.jpg" alt="">



                        <div class="text-arrivals">
                            <p class="arrivals text-center">#newarrivals</p>

                            <p class="arrivals-shop">Shop now</p>


                        </div>


                    </div>
                </a>
            </div>

        </div>


    </div>
</div>




<div class="container text-center best ">
    <div class="product-text" id="pills-tab" role="tablist">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">

                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <p class="product-item">Best sellers</p>
                    </a>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">

                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <p class="product-item">New arrivals
                        </p>
                    </a>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">

                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <p class="product-item">Items sale</p>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="tab-content mb-5" id="pills-tabContent">

        <div class="many-products mb-5 tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

            <div class="row mt-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 ">
                @foreach ($product_best as $prod)


                <div class="col slide-top1 ">

                    <a href="{{route('home.detail', $prod->id)}}">

                        <div class="card">
                            <img class="card-img-top" src="{{url('uploads')}}/{{$prod->image}}" alt="Title">
                            @foreach ( $prod->img as $item)
                            <img class="img-change" src="{{url('uploads/imgs_product')}}/{{ $item->images }}" alt="Title">
                            @endforeach

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
                            <div class="card-body">
                                <p class="card-title">{{$prod->name}}</p>
                                <p class="card-text">${{$prod->price}}.00</p>
                            </div>
                            <div class="icon-heart">
                                <a href="">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>

                        </div>
                    </a>

                </div>
                @endforeach
                <!-- <div class="col slide-top1 ">
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
                <div class="col slide-top1 ">
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
                <div class="col slide-top1 ">
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
                <div class="col slide-top1 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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

                </div> -->
            </div>

        </div>









        <div class="  many-products tab-pane fade mb-5 " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="row mt-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 ">
                @foreach ($product_new as $prod)


                <div class="col slide-top1 ">

                    <a href="{{route('home.detail', $prod->id)}}">

                        <div class="card">
                            <img class="card-img-top" src="{{url('uploads')}}/{{$prod->image}}" alt="Title">
                            @foreach ( $prod->img as $item)
                            <img class="img-change" src="{{url('uploads/imgs_product')}}/{{ $item->images }}" alt="Title">
                            @endforeach

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
                            <div class="card-body">
                                <p class="card-title">{{$prod->name}}</p>
                                <p class="card-text">${{$prod->price}}.00</p>
                            </div>
                            <div class="icon-heart">
                                <a href="">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>
                @endforeach
                <!-- <div class="col slide-top1 ">
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
                <div class="col slide-top1 ">
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
                <div class="col slide-top1 ">
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
                <div class="col slide-top1 ">
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
                <div class="col slide-top2  ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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

                </div> -->
            </div>
        </div>





        <div class="many-products tab-pane fade  mb-5 " id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="row mt-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 ">

                @foreach ($product_sale as $prod)

                @if ($prod->discount != null)
                <div class="col slide-top1 ">

                    <a href="{{route('home.detail', $prod->id)}}">

                        <div class="card">
                            <img class="card-img-top" src="{{url('uploads')}}/{{$prod->image}}" alt="Title">
                            @foreach ( $prod->img as $item)
                            <img class="img-change" src="{{url('uploads/imgs_product')}}/{{ $item->images }}" alt="Title">
                            @endforeach

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
                            <div class="card-body">
                                <p class="card-title">{{$prod->name}}</p>
                                <p class="card-text"> <span><del class="pe-3" style="color: #ababab; font-weight: normal;">${{$prod->price}}.00</del></span>${{$prod->discount}}.00</p>
                            </div>
                            <div class="icon-heart">
                                <a href="">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>

                            <span class="on-sale product-flash">
                                Sale
                            </span>
                        </div>
                    </a>

                </div>
                @endif

                @endforeach
                <!-- 
                <div class="col slide-top1 ">
                    <div class="card">
                        <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-178-405x510.jpg" alt="Title">
                        <img class=" img-change" src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-177-405x510.jpg" alt="Title">

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
                        <div class="card-body">
                            <p class="card-title">Thin Coat Lightly</p>
                            <p class="card-text">$88.00 – $89.00</p>
                        </div>
                        <div class="icon-heart">
                            <a href="">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col slide-top1 ">
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
                <div class="col slide-top1 ">
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
                <div class="col slide-top1 ">
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
                <div class="col slide-top1 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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
                <div class="col slide-top2 ">
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

                </div> -->
            </div>
        </div>


    </div>
</div>


<div class="aprilstore">
    <div class="april-text">
        <p class="text-item text-center">#APRILSTORE</p>
        <h4 class=" text-deal text-center">Deal of The Day</h4>
    </div>
    <div class="date">
        <div class="countdown ">
            <span class="countdown-value">00</span>
            <span class="countdown-text">days</span>
        </div>
        <div class="countdown">
            <span class="countdown-value">00</span>
            <span class="countdown-text">hours</span>
        </div>
        <div class="countdown">
            <span class="countdown-value">00</span>
            <span class="countdown-text">mins</span>
        </div>
        <div class="countdown">
            <span class="countdown-value">00</span>
            <span class="countdown-text">secs</span>
        </div>
    </div>
    <div class="shop-april">
        <a href="">
            <p>Shop now</p>
        </a>
    </div>

</div>


<div class="blog-update">
    <div class="text-blog">
        <p class="">#blog.update</p>
    </div>

    <div class="container">
        <div class="blogs">
            <div class="swiper mySwiper mySwiprer-blog">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="detail-blog">
                            <div class="card">
                                <div class="card-img-top">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/07/posts-11-555x330.jpg" alt="Title">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Woman</h4>
                                    <p class="card-text">Choose for yourself the most beautiful shoes</p>
                                    <a href="" class="read-more">
                                        <p>read more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="detail-blog">
                            <div class="card">
                                <div class="card-img-top">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/07/posts-11-555x330.jpg" alt="Title">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Woman</h4>
                                    <p class="card-text">Choose for yourself the most beautiful shoes</p>
                                    <a href="" class="read-more">
                                        <p>read more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="detail-blog">
                            <div class="card">
                                <div class="card-img-top">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/07/posts-11-555x330.jpg" alt="Title">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Woman</h4>
                                    <p class="card-text">Choose for yourself the most beautiful shoes</p>
                                    <a href="" class="read-more">
                                        <p>read more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="detail-blog">
                            <div class="card">
                                <div class="card-img-top">
                                    <img class="card-img-top" src="https://themes.g5plus.net/april/wp-content/uploads/2017/07/posts-11-555x330.jpg" alt="Title">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Woman</h4>
                                    <p class="card-text">Choose for yourself the most beautiful shoes</p>
                                    <a href="" class="read-more">
                                        <p>read more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
    </div>






    <div class="goto-blog">
        <a href="{{route('home.blog')}}">
            <p>Go to blog</p>
        </a>
    </div>
</div>








@include('client.layout.footer')