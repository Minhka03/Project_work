<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{url('asset/css/checkout.css')}}">
  <link rel="stylesheet" href="{{url('asset/css/header.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>

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





  <form action="{{route('cart.checkout')}}" method="post">
    @csrf
    <div class="checkout row">
      <div class=" col-lg-8 order ">

        <div class="information-order">
          <div class="row order-check">
            <div class="col-lg-6">
              <h5>Thông tin giao hàng</h5>
              <div class="mb-3">
                <label for="" class="form-label">Họ và tên</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" name="email" value="{{$auth->email}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Tỉnh thành</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Hà Nội</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Quận</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Cầu Giấy</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Phường xã</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Trung hòa</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="mb-3 pb-5">
                <label for="" class="form-label ">Ghi chú</label>
                <textarea name="order_note" class="form-control" id=""></textarea>
              </div>
            </div>
            <div class="col-lg-6">
              <h5>Vận chuyển</h5>
              <div class="mb-3">
                <div class="shipping">
                  <div class="form-check border">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label ps-2" for="exampleRadios1">
                      Miễn phí vận chuyển
                    </label>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <div class="shipping-cart">
                  <h5>Thanh toán</h5>
                  <ul class="list-group">
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
                      <label class="form-check-label" for="firstRadio"> Thanh toán qua thẻ thanh toán, ứng dụng ngân hàng VNPAY</label>
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                      <label class="form-check-label" for="secondRadio">Thanh toán qua mã QR - VNPAY</label>
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
                      <label class="form-check-label" for="thirdRadio">Thanh toán qua Ví MoMo</label>
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
                      <label class="form-check-label" for="thirdRadio"> Thanh toán khi nhận hàng (COD)</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <p class="mt-5">Sau khi <b>hoàn tất đơn hàng</b> khoảng 60-90 phút (trong giờ hành chính), YODY sẽ nhanh chóng gọi điện xác nhận lại thời gian giao hàng với bạn. YODY xin cảm ơn!</p>
        </div>

      </div>

      <div class="col-lg-4 cart-order">

        <div class="products-order">
          <h5>Đơn hàng (13 sản phẩm)</h5>
          <ul class="cart">
            <div class="menu-cart-con">
              <div class="cart-header d-flex">
                <div class="container">
                  <div class="description-cart scrollbar">
                    @foreach ($cartGlobal as $item )
                    <div class="a ">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="cart-img">
                            <img src="{{url('/uploads')}}/{{$item->image}}" alt="">
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="cart-title">
                            <p> {{$item->name}} </p>
                            <p class="remove"><i class="fa-solid fa-trash"></i></p>
                            <p>{{$item->price}}.00$</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach






                    <!-- <div class="a">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="cart-img">
                                                                            <img src="https://themes.g5plus.net/april/wp-content/uploads/2017/09/product-181-405x510.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-8">
                                                                        <div class="cart-title">
                                                                            <p> Thin Coat Lightly - Gray </p>
                                                                            <p class="remove"><i class="fa-solid fa-trash"></i></p>
                                                                            <p>89.00$ </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                    <div class="cart-header-subtotal d-flex">
                      <p>Subtoltal:</p>
                      <p>124.00$</p>
                    </div>
                    <div class="cart-con-boder">

                    </div>

                    <div class="btn-checkout">
                      <div class="btn-cart">
                        <a href="{{route('cart.view')}}" class="btn-1">View cart</a>
                      </div>
                      <div class="btn-cart">
                        <button class="btn-2">CheckOut</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </ul>

          <div class="row item1">
            <div class="col-lg-6">
              <div class="coupon">
                <input type="text" name="" id="" placeholder="Nhập mã giảm giá" aria-describedby="helpId">
              </div>
            </div>
            <div class="col-lg-6">
              <button class="btn-coupon">Ap dung</button>
            </div>
          </div>
          <div class="item2">
            <div class="row">
              <div class="col-lg-6">
                <p class="mb-2">Tam tinh</p>
              </div>
              <div class="col-lg-6">
                <p class="free">Free</p>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <p>Phi van chuyen</p>
              </div>
              <div class="col-lg-6">
                <p class="free">Mien phi</p>
              </div>
            </div>
          </div>

          <div class="item-3">  
            <div class="row">
              <div class="col-lg-6">
                <p>Tong cong</p>
              </div>
              <div class="col-lg-6">
                <p class="free">5.338.000đ</p>
              </div>
            </div>

            <div class="row item-4">
              <div class="col-lg-6">
                <a href=""> <i class="fa-solid fa-arrow-left"></i> Quay ve gio hang</a>
              </div>
              <div class="col-lg-6">
                <a href="" class="btn-coupon">Đặt hàng</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    </div>

  </form>





  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>