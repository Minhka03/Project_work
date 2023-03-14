@include('client.layout.header')

<div class="banner-product card-img">
    <div class="title">
        <h1 class="title-name">Shop</h1>
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
                            <div class="check-price">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        0.00$ - 20.00$
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        20.00$ - 50.00$
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        50.00$ - 100.00$
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="size-list">
                            <p>Size</p>
                            <div class="check-size ms-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        S
                                    </label>
                                </div>
                                <div class="form-check">
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
                                </div>

                            </div>
                        </div>

                        <div class="color-list">
                            <p>Color</p>
                            <div class="check-color">


                                <form action="">
                                    <div class="form-check">
                                        <div class="1 p-2">
                                            <input class="black" type="checkbox"></input>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Black
                                            </label>
                                        </div>
                                        <div class="2  p-2">
                                            <input class="red" type="checkbox"></input>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Red
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
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <form class="search-container" action="//llamaswill.tumblr.com/search">
                        <input id="search-box" type="text" class="search-box" name="q" />
                        <label for="search-box"><span><i class="fa-solid fa-magnifying-glass glyphicon glyphicon-search search-icon"></i></span></label>
                        <input type="submit" id="search-submit" />
                    </form>
                </div>

                <div class="fillter-option">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Featured</option>
                        <option value="1">Best selling </option>
                        <option value="2">Alphabetically, A-Z</option>
                        <option value="3">Alphabetically, Z-A</option>
                        <option value="4">Price, low to high</option>
                        <option value="4">Price, high to low</option>
                    </select>

                </div>
            </div>
        </div>
    </div>

    <div class="many-products mb-5 tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

        <div class="row  row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 ">
            <div class="col ">
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

            </div>
        </div>

    </div>


    <div class="many-products mb-5 tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

        <div class="row  row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 ">
            <div class="col ">
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

            </div>
        </div>

    </div>


    <button class="loading">Load More</button>


</div>


<!-- js-select-option -->





@include('client.layout.footer')