@extends('layouts.default') @section('content')
<!-- banner - large -->
<section>
    @if(count($banners) > 1)
    <div class="swiper-container swiper-container--masked">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="swiper-slide">
                <div class="image-bg" style="background-image: url({{ asset('storage/images/'.$banner->banner_image) }})"></div>
                <div class="wrapper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <strong>{{$banner->banner_title}}</strong>
                                {!! $banner->banner_description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-button swiper-button-prev"></div>
    </div>
    @else @foreach($banners as $banner)
    <div class="institutional-banner">
        <div class="image-bg" style="background-image: url({{ asset('storage/images/'.$banner->banner_image) }})">
            <div class="wrapper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <strong>{{ $banner->banner_title }}</strong>
                            {!! $banner->banner_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach @endif
</section>
<!-- banner - large ends -->
@endsection