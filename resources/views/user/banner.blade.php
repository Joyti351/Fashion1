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
