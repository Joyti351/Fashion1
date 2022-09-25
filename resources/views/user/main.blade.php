<!DOCTYPE html>
<html lang="zxx">

@include('user.head')

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{asset('fashion/img/icon/search.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('fashion/img/icon/heart.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('fashion/img/icon/cart.png')}}" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('user.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @yield('content')
    @include('user.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{asset('fashion/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('fashion/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fashion/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('fashion/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('fashion/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('fashion/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('fashion/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('fashion/js/mixitup.min.js')}}"></script>
    <script src="{{asset('fashion/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('fashion/js/main.js')}}"></script>
</body>

</html>
