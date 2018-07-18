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

<section>
    <div class="empty-space-80"></div>
    @foreach($products as $key => $product)
    <article class="post-article">
        <div class="container">
            <div class="row matchheight">
                @if($key%2)
                <div class="col-sm-6 col-xs-12 col-sm-push-6" data-mh="post-article">
                    <a href="produtos/{{$product->slug}}" title="{{$product->title}}">
                        <div class="bordered-image">
                            @if($product->featured_image)
                            <img class="img-responsive" src="{{ Image::url(asset('storage/images/'.$product->featured_image),720,480,array('crop','')) }}"
                                alt="{{$product->title}}"> @else
                            <img class="img-responsive" src="https://dummyimage.com/720x480/000/fff" alt="{{$product->title}}"> @endif
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-5 col-md-offset-1 col-xs-12 col-sm-pull-6 col-md-pull-7" data-mh="post-article">
                    <h2>{{$product->title}}</h2>
                    <div class="text-ellipses">
                        {!! $product->description !!}
                    </div>
                    <a href="produtos/{{$product->slug}}" class="btn btn-primary" title="{{$product->title}}">Ver mais</a>
                </div>
                @else
                <div class="col-sm-6 col-xs-12" data-mh="post-article">
                    <a href="produtos/{{$product->slug}}" title="{{$product->title}}">
                        <div class="bordered-image">
                            @if($product->featured_image)
                            <img class="img-responsive" src="{{ Image::url(asset('storage/images/'.$product->featured_image),720,480,array('crop','')) }}"
                                alt="{{$product->title}}"> @else
                            <img class="img-responsive" src="https://dummyimage.com/720x480/000/fff" alt="{{$product->title}}"> @endif
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-5 col-md-offset-1 col-xs-12" data-mh="post-article">
                    <h2>{{$product->title}}</h2>
                    <div class="text-ellipses">
                        {!! $product->description !!}
                    </div>
                    <a href="produtos/{{$product->slug}}" class="btn btn-primary" title="{{$product->title}}">Ver mais</a>
                </div>
                @endif
            </div>
        </div>
    </article>
    <div class="empty-space-80"></div>
    @endforeach


</section>
@endsection