@extends('layouts.default') @section('content')
<!-- banner - large -->
<section>
    <div class="institutional-banner">
        @foreach($template as $templ)
        <div class="image-bg" style="background-image: url('{{ asset('storage/images/'.$templ->featured_image) }}')"></div>
        @endforeach
    </div>
</section>
<!-- banner - large ends -->
<div class="empty-space-20"></div>
<!-- breadcrumb -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb fleft">
                    <li>
                        <a href="{{ url('/')}}" title="home">Home</a>
                    </li>
                    <li>
                        @foreach($template as $templ)
                        <a href="{{ $templ -> slug }}" title="{{ $templ -> title }}">{{ $templ -> title }}</a>
                        @endforeach
                    </li>
                </ul>
                <div class="search-filter fright">
                    <form action="" method="get">
                        <div class="search-filter-field">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <input type="text" placeholder="Procurar..." name="search_field" id="search_field">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /breadcrumb -->
<!-- ABOUT -->
<section>
    <div class="empty-space-80"></div>
    <div class="container">
        <div class="row matchheight">
            @foreach($products as $product)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" data-mh="product-item">
                <div class="product-card">
                    <a href="produtos/{{ $product->slug}}" title="{{ $product->slug}}">
                        <img class="img-responsive" src="{{ Image::url(asset('storage/images/'.$product->featured_image),345,345,array('crop','')) }}" alt="">
                    </a>
                    <a href="produtos/{{ $product->slug}}" title="{{ $product->slug}}">
                        @if($settings[0]->website_mode_store == 'on')
                        <span class="product-card__category">Category Product</span>
                        @endif
                        <h4 class="product-card__title">{{ $product->title }}</h4>
                    </a>
                    @if($settings[0]->website_mode_store == 'on')
                    <span class="product-card__price">10€</span>
                    <span class="product-card__oldprice">19€</span>
                    @endif
                    <div class="product-card__smalltext">
                        {!! $product->description !!}
                    </div>
                    <div class="clearfix"></div>
                    <a href="produtos/{{ $product->slug}}" class="btn btn-primary btn-block">Visualizar</a>
                    @if($settings[0]->website_mode_store == 'on')
                    <button type="button" class="btn btn-primary buy-item">Comprar</button>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="empty-space-80"></div>
    <a href="#viewmore" title="ver mais" class="view-more btn btn-viewmore">
        <i class="far fa-plus-square"></i>
    </a>
</section>
<!-- /ABOUT -->
@endsection