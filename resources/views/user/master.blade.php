@extends('user.main');
@section('content')
<section class="hero">
    <div class="hero__slider owl-carousel">
        @foreach ($data['sliders'] as $slider )

        <div class="hero__items set-bg" data-setbg="{{asset($slider->bg_image)}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>{{$slider->heading1}}</h6>
                            <h2>{{$slider->heading2}}</h2>
                            <p>{{$slider->description}}</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
         <div class="row">
            @foreach ($data['banners'] as $banner )
            <div class="col-lg-7 offset-lg-4">

                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="{{asset($banner->banner_image_1)}}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>{{ $banner->heading_1 }}</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="{{asset($banner->banner_image_2)}}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>{{ $banner->heading_2 }}</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="{{asset($banner->banner_image_3)}}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>{{ $banner->heading_3 }}</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Banner Section End -->

<!-- Product Section Begin -->

<!-- Product Section End -->

<!-- Categories Section Begin -->

<!-- Categories Section End -->

<!-- Instagram Section Begin -->

<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Fashion New Trends</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data['trends'] as $trend)


            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{asset($trend->image_1)}}"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('fashion/img/icon/calendar.png')}}" alt=""> 16 February 2020</span>
                        <h5>{{ $trend->heading_1 }}</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{asset($trend->image_2)}}"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('fashion/img/icon/calendar.png')}}" alt=""> 21 February 2020</span>
                        <h5>{{ $trend->heading_2 }}</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{asset($trend->image_3)}}"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('fashion/img/icon/calendar.png')}}" alt=""> 28 February 2020</span>
                        <h5>{{ $trend->heading_3}}</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->

<!-- Footer Section Begin -->

@endsection
