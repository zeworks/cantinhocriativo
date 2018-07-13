@extends('layouts.default') @section('content')

<section>
    <div class="institutional-banner">
        @foreach($template as $templ)
        <div class="image-bg" style="background-image: url('{{ asset('storage/images/'.$templ->featured_image) }}')"></div>
        @endforeach
    </div>
</section>
<div class="empty-space-20"></div>
<!-- breadcrumb -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/')}}" title="home">Home</a>
                    </li>
                    <li>
                        @foreach($template as $templ)
                        <a href="{{ $templ -> slug }}" title="sobre">{{ $templ -> title }}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /breadcrumb -->
<!-- BLOG SECTION -->
<div class="empty-space-80"></div>
<section>
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-sm-6">
                <article class="post-article">
                    <a href="blog-detail.php" title="view more">
                        <img class="img-responsive" src="{{ Image::url(asset('storage/images/'.$blog->featured_image),720,480,array('crop','')) }}" alt="">
                    </a>
                    <h2>{{$blog->title}}</h2>
                    <small>{{$blog->created_at}}</small>
                    <br><br>
                    <div class="text-ellipses">
                        {!! $blog->description !!}        
                    </div>
                    <div class="share fright">
                        <a href="#facebook" title class="share-item">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#pinterest" title class="share-item">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#googleplus" title class="share-item">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </div>
                    @foreach($template as $templ)
                    <a href="{{$templ->slug.'/'.$blog->slug}}" class="btn btn-primary" title="view more">View More</a>
                    @endforeach
                </article>
                <div class="empty-space-80"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="empty-space-80"></div>
<!-- BLOG SECTION-->
@endsection