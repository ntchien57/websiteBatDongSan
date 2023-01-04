@extends('main')

@section('content')
    <div class="container p-t-100 ">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Trang chủ
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
                {{ $product->menu->name }}
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                {{ $title }}
            </span>
        </div>
    </div>

    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots">
                                <ul class="slick3-dots" role="tablist" st yle="">
                                    <li class="slick-active" role="presentation">
                                        {{--                                    <img src=" images/product-detail-01.jpg "> --}}
                                        {{--                                    <div class="slick3-dot-overlay"></div> --}}
                                        {{--                                </li> --}}
                                        {{--                                <li role="presentation"> --}}
                                        {{--                                    <img src=" images/product-detail-02.jpg "> --}}
                                        {{--                                    <div class="slick3-dot-overlay"></div> --}}
                                        {{--                                </li> --}}
                                        {{--                                <li role="presentation"> --}}
                                        {{--                                    <img src=" images/product-detail-03.jpg "> --}}
                                        {{--                                    <div class="slick3-dot-overlay"></div> --}}
                                        {{--                                </li> --}}
                                </ul>
                            </div>

                            <div class="slick3 gallery-lb slick-initialized slick-slider slick-dotted">
                                <div class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 1800px;">
                                        <div class="item-slick3 slick-slide slick-current slick-active"
                                            data-thumb="images/product-detail-01.jpg" data-slick-index="0"
                                            aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10"
                                            aria-describedby="slick-slide-control10"
                                            style="width: 600px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="{{ $product->thumb }}" alt="IMG-PRODUCT">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{ $title }}
                        </h4>

                        <span class="mtext-106 cl2" style="color: red; font-size: 26px">
                            {!! \App\Helpers\Helper::price($product->price_sale) !!} <sup>đ</sup>
                        </span>

                        <span class="mtext-106 cl2" style="color: #000; text-decoration:line-through ">
                            {!! \App\Helpers\Helper::price($product->price) !!} <sup>đ</sup>
                        </span>

                        <div class="p-t-20 " style="font-size: 14px">Miễn phí vận chuyển cho đơn hàng từ <sup>đ</sup>100.000
                        </div>

                        <!--  -->
                        <div class="p-t-33">
                            {{--                            <div class="flex-w flex-r-m p-b-10"> --}}
                            {{--                                <div class="size-203 respon6"> --}}
                            {{--                                    Size --}}
                            {{--                                </div> --}}
                            {{--                                <div class="size-204 respon6-next"> --}}
                            {{--                                    <div class="rs1-select2 bor8 bg0"> --}}
                            {{--                                        <select class="js-select2" name="product-size" > --}}
                            {{--                                            <option>S</option> --}}
                            {{--                                            <option>M</option> --}}
                            {{--                                            <option>L</option> --}}
                            {{--                                            <option>XL</option> --}}
                            {{--                                        </select> --}}
                            {{--                                        <div class="dropDownSelect2"></div> --}}
                            {{--                                    </div> --}}
                            {{--                                </div> --}}
                            {{--                            </div> --}}

                            {{--                        <div class="flex-w flex-r-m p-b-10"> --}}
                            {{--                            <div class="size-203 flex-c-m respon6"> --}}
                            {{--                                Color --}}
                            {{--                            </div> --}}

                            {{--                            <div class="size-204 respon6-next"> --}}
                            {{--                                <div class="rs1-select2 bor8 bg0"> --}}
                            {{--                                    <select class="js-select2 select2-hidden-accessible" name="time" tabindex="-1" aria-hidden="true"> --}}
                            {{--                                        <option>Choose an option</option> --}}
                            {{--                                        <option>Red</option> --}}
                            {{--                                        <option>Blue</option> --}}
                            {{--                                        <option>White</option> --}}
                            {{--                                        <option>Grey</option> --}}
                            {{--                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 141.2px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-time-13-container"><span class="select2-selection__rendered" id="select2-time-13-container" title="Choose an option">Choose an option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                            {{--                                    <div class="dropDownSelect2"></div> --}}
                            {{--                                </div> --}}
                            {{--                            </div> --}}
                            {{--                        </div> --}}
                            <form action="/add-cart" method="post">
                                {{-- <div class="flex-w  p-b-10">
                                <div class="size-204" style="display:flex;">
                                        <label class="label-size" id="label-size1">
                                            <input id="input-size1" class="input-size" type="radio" name="size" value="S">
                                            <span>S</span>
                                        </label>
                                        <label class="label-size" id="label-size2" >
                                            <input id="input-size2" class="input-size" type="radio" name="size" value="M">
                                            <span>M</span>
                                        </label>
                                        <label class="label-size" id="label-size3">
                                            <input id="input-size3" class="input-size" type="radio" name="size" value="L">
                                            <span>L</span>
                                        </label>
                                        <label class="label-size" id="label-size4">
                                            <input id="input-size4" class="input-size" type="radio" name="size" value="XL">
                                            <span>XL</span>
                                        </label>
                                </div>
                            </div> --}}
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="p-r-40 p-b-120">
                                        Số lượng
                                    </div>
                                    <div class="size-204  respon6-next">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                name="num-product" value="1">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>

                                        <div class="p-t-20">
                                            {{ $product->available }}<span> sản phẩm có sẵn</span>
                                        </div>

                                        <button
                                            class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail m-t-30">
                                            Add to cart
                                        </button>

                                        <input type="hidden" name="product-id" value="{{ $product->id }}">
                                        @csrf
                            </form>
                        </div>
                    </div>
                </div>

                <div class="bor10 m-t-50 p-t-43 p-b-40">
                    <!-- Tab01 -->
                    <div class="tab01">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item p-b-10">
                                <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Mô tả sản
                                    phẩm </a>
                            </li>

                            <li class="nav-item p-b-10">
                                <a class="nav-link" data-toggle="tab" href="#information" role="tab">Đánh giá</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-t-43">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                <div class="how-pos2 p-lr-15-md">
                                    <p class="stext-102 cl6">
                                        {!! $product->content !!}
                                    </p>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="information" role="tabpanel">
                                <div class="row">
                                    <div class="how-pos2 p-lr-15-md p-tb-15" >
                                        @foreach ($comments as $comment )
                                            <div class="flex-w p-tb-15" style="border-right-color: antiquewhite">
                                                    <i class="fa fa-user icon-comment"></i>                                              
                                                <div>
                                                    <span class="user-comment">{{ $comment->user->name }}</span>
                                                    <div class="flex">
                                                        <img class="star-icon" src="/template/images/star-icon.png" alt="">
                                                        <img class="star-icon" src="/template/images/star-icon.png" alt="">
                                                        <img class="star-icon" src="/template/images/star-icon.png" alt="">
                                                        <img class="star-icon" src="/template/images/star-icon.png" alt="">
                                                        <img class="star-icon" src="/template/images/star-icon.png" alt="">
                                                    </div>
                                                    <div>
                                                        <span style="color: #ddd">{{ $comment->created_at }}</span>
                                                    </div>
                                                </div>
                                                <div style="border-color: #000 ">
                                                    <p class="content-comment p-l-50 p-tb-30">{{ $comment->content }}</p>                                                  
                                                </div>
                                            </div>
                                           
                                       
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                        <div class="p-b-30 m-lr-15-sm">
                                            <!-- Review -->
                                            <div class="flex-w flex-t p-b-68">
                                                <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                    <img src="images/avatar-01.jpg" alt="AVATAR">
                                                </div>

                                                <div class="size-207">
                                                    <div class="flex-w flex-sb-m p-b-17">
                                                        <span class="mtext-107 cl2 p-r-20">
                                                            Ariana Grande
                                                        </span>

                                                        <span class="fs-18 cl11">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </span>
                                                    </div>

                                                    <p class="stext-102 cl6">
                                                        Quod autem in homine praestantissimum atque optimum est, id
                                                        deseruit. Apud ceteros autem philosophos
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Add review -->
                                            <form class="w-full">
                                                <h5 class="mtext-108 cl2 p-b-7">
                                                    Add a review
                                                </h5>

                                                <p class="stext-102 cl6">
                                                    Your email address will not be published. Required fields are marked *
                                                </p>

                                                <div class="flex-w flex-m p-t-50 p-b-23">
                                                    <span class="stext-102 cl3 m-r-16">
                                                        Your Rating
                                                    </span>

                                                    <span class="wrap-rating fs-18 cl11 pointer">
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <input class="dis-none" type="number" name="rating">
                                                    </span>
                                                </div>

                                                <div class="row p-b-25">
                                                    <div class="col-12 p-b-5">
                                                        <label class="stext-102 cl3" for="review">Your review</label>
                                                        <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                                    </div>

                                                    <div class="col-sm-6 p-b-5">
                                                        <label class="stext-102 cl3" for="name">Name</label>
                                                        <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name"
                                                            type="text" name="name">
                                                    </div>

                                                    <div class="col-sm-6 p-b-5">
                                                        <label class="stext-102 cl3" for="email">Email</label>
                                                        <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email"
                                                            type="text" name="email">
                                                    </div>
                                                </div>

                                                <button
                                                    class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-w flex-m justify-content-center p-t-40 respon7">
                    <div class="flex-m bor9 p-r-10 m-r-11">
                        <a href="#"
                            class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
                            data-tooltip="Add to Wishlist">
                            <i class="zmdi zmdi-favorite"></i>
                        </a>
                    </div>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                        data-tooltip="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                        data-tooltip="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                        data-tooltip="Google Plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
        </div>

        <!--  -->

        </div>
        </div>
        </div>
    </section>
@endsection
