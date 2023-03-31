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
            <div class="row ">
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


                <div class="item-cart row ">


                    <div class= "col-xl-6 col-lg-12 col-md-12 col-12 cart-border">
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
                    <div class= "col-xl-6 col-lg-12 col-md-12 col-12 cart-border">
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
                </div>

                <div class="item-cart  row">


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
                </div>
            </div>
        </div>

    </div>
</div>


@include('client.layout.footer')