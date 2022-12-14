@extends('user.head.blog.blog')
@section('content')
<section class="breadcrumb-blog set-bg" data-setbg="{{asset('fashion/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Our Blog</h2>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        @foreach ($data['blogs'] as $blog)


        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{asset($blog->image_1)}}"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('fashion/img/icon/calendar.png')}}" alt=""> {{ $blog->date_1 }}</span>
                        <h5>{{ $blog->heading_1 }}</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{asset($blog->image_2)}}"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('fashion/img/icon/calendar.png')}}" alt=""> {{ $blog->date_2 }}</span>
                        <h5>{{ $blog->heading_2 }}</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{asset($blog->image_3)}}"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('fashion/img/icon/calendar.png')}}" alt="">{{ $blog->date_3 }}</span>
                        <h5>{{ $blog->heading_3 }}</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</section>
@endsection
