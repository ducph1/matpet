<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> {{ getConfigValueFromSettingTable('phone_contact') }}</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> {{ getConfigValueFromSettingTable('email') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{ getConfigValueFromSettingTable('facebook_link') }}">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li><a href="{{ getConfigValueFromSettingTable('linkendin_link') }}"><i class="fa fa-twitter custom-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram custom-instagram"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                            <li><a href="#"><i class="fa fa-google-plus custom-gg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-2 clearfix">
                    <div class="logo pull-left">
                        <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/logomatpet.png') }}" alt=""/></a>
                    </div>
                </div>
                <div class="col-md-10 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <!-- <li><a href=""><i class="fa fa-user"></i> Account</a></li> -->
                            <!-- <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li> -->
                            <!-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</a></li>
                            <li><a href="{{ route('frontend.login') }}"><i class="fa fa-lock"></i>Đăng nhập</a></li>
                        </ul>
                    </div>
                    <div class="shop-banner">
                        <img src="{{ asset('/assets/img/MatPetBanner.png') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    @include('frontend.components.main_menu')

                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form action="{{URL::to('/search')}}" method="POST">
                           @csrf
                            <input type="text" name="keywords_submit" placeholder="Tìm Kiếm"/>
                            <div class="search_icon">
                                <input type="submit" name="search_items" value=''>
                                <img src="{{ asset('/eshopper/images/home/searchicon.png') }}" alt="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
