@include('client.layout.header')





<div class="banner-product card-img">
    <div class="title">
        <h1 class="title-name"></h1>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">/</a>
            </li>
            <li>
                <p class="shop" href="">Shop</p>
            </li>
        </ul>
    </div>
</div>


<div class="container">
    <div class="product-fillter">
        <div class="row">
            <div class="showing">
                <div class="fillter-all d-flex">
                    <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fa-solid fa-filter"></i> Fillter</a>

                    <!-- ofcanvas -->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <h5>Fillter</h5>
                        <div class="price">
                            <p>Price</p>


                            <form action="{{route('home.product')}}" method="get">

                                <div class="check-price">

                                    <div class="form-check">
                                        <input class="form-check-input" name="min_price1" type="checkbox" value="1">
                                        <input type="hidden" name="max_price1" value="20">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            0.00$ - 20.00$
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="min_price2" type="checkbox" value="20" id="flexCheckChecked">
                                        <input type="hidden" name="max_price2" value="50">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            20.00$ - 50.00$
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="min_price3" type="checkbox" value="50" id="flexCheckChecked">
                                        <input type="hidden" name="max_price3" value="100">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            50.00$ - 100.00$
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Fillter</button>







                            </form>

                        </div>

                        <div class="size-list">
                            <p>Size</p>
                            <form action="{{route('home.product')}}" method="get">

                                <div class="check-size ms-3">


                                    @foreach ($sizes as $item)
                                    <a href="">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="size" value="{{$item->id}}" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{$item->value}}
                                            </label>
                                        </div>
                                    </a>
                                    @endforeach


                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            M
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            XL
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            XXL
                                        </label>
                                    </div> -->

                                </div>

                                <button type="submit" class="btn btn-primary">Fillter</button>
                            </form>
                        </div>

                        <div class="color-list">
                            <p>Color</p>
                            <div class="check-color">


                                <form action="{{route('home.product')}}" method="get">
                                    <div class="form-check">

                                        @foreach ($colors as $item)
                                        <div class="1 p-2">
                                            <input class="blue" name="color" value="{{$item->id}}" type="checkbox"></input>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{$item->content}}
                                            </label>
                                        </div>

                                        @endforeach


                                        <!-- <div class="2  p-2">
                                            <input class="red" type="checkbox"></input>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                
                                            </label>
                                        </div>
                                        <div class="3  p-2">
                                            <input class="blue" type="checkbox"></input>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Blue
                                            </label>
                                        </div>
                                        <div class="4  p-2">
                                            <input class="pink" type="checkbox"></input>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Pink
                                            </label>
                                        </div>
                                        <div class="5  p-2">
                                            <input class="green" type="checkbox"></input>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Green
                                            </label>
                                        </div> -->

                                    </div>
                                    <button type="submit" class="btn btn-primary">Fillter</button>
                                </form>
                            </div>
                        </div>

                    </div>

                    <form class="search-container" action="/llamaswill.tumblr.com/search">
                        <input id="search-box" type="text" class="search-box" name="q" />
                        <label for="search-box"><span><i class="fa-solid fa-magnifying-glass glyphicon glyphicon-search search-icon"></i></span></label>
                        <input type="submit" id="search-submit" />
                    </form>
                </div>

                <div class="fillter-option">
                    <form action="{{route('home.product')}}" class="d-flex">
                        <select class="form-select" name="sort" aria-label="Default select example">
                            <option value="asc">Alphabetically, A-Z</option>
                            <option value="desc">Alphabetically, Z-A</option>
                            <option value="lowToHigh">Price, low to high</option>
                            <option value="HighToLow">Price, high to low</option>
                        </select>

                        <button type="submit" class="btn btn-info">Fillter</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row  row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 productss">

        @foreach ($product as $pro)

        <div class="col">
            <a href="{{route('home.detail', $pro->id)}}">

                <div class="card">
                    <img class="card-img-top" src="{{url('uploads')}}/{{$pro->image}}" alt="Title">
                    @foreach ( $pro->img as $item)
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
                        <p class="card-title">{{$pro->name}}</p>

                        @if ($pro->discount != null)
                        <p class="card-text"> <span><del class="pe-3" style="color: #ababab; font-weight: normal;">${{$pro->price}}.00</del></span>${{$pro->discount}}.00</p>
                        @else
                        <p class="card-text">${{$pro->price}}.00</p>
                        @endif
                    </div>
                    <div class="icon-heart">
                        <a href="">
                            <i class="fa-regular fa-heart"></i>
                        </a>
                    </div>
                    @if ($pro->discount != null)
                    <span class="on-sale product-flash">
                        Sale
                    </span>
                    @endif
                </div>
            </a>

        </div>

        @endforeach

        <!-- <div class="col">
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
            <div class="col ">
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
            <div class="col ">
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
            <div class="col ">
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
            <div class="col ">
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
            <div class="col ">
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
            <div class="col ">
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
            <div class="col ">
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
            <div class="col ">
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
              <div class="col ">
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
    <button class="loading">Load More</button>
</div>


<!-- js-select-option -->







@include('client.layout.footer')