@extends('layouts.default') @section('content')
<section>
    <div class="institutional-banner">
        @foreach($blogs as $blog)
        <div class="image-bg" style="background-image: url('{{ asset('storage/images/'.$blog->featured_image) }}')"></div>
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
                        <a href="{{ url('blog')}}" title="Blog">Blog</a>
                    </li>
                    <li>
                        @foreach($blogs as $blog)
                        <a href="{{ $blog -> slug }}" title="{{ $blog -> title }}">{{ $blog -> title }}</a>
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
            <div class="col-sm-5 col-sm-push-7">
                @isset($images)
                <div class="empty-space-20"></div>
                <div class="owl-carousel owl-theme product-carousel">
                    @foreach($images as $key => $image)
                    <div class="item" data-hash="{{$image->id}}">
                        <img class="img-responsive zoom-image" src="{{ Image::url(asset('storage/images/image_temp/'.$images[$key]['images']->image_name),720,480,array('crop','')) }}"
                            alt="" data-zoom-image="{{ Image::url(asset('storage/images/image_temp/'.$images[$key]['images']->image_name),900,900,array('crop','')) }}">
                    </div>
                    @endforeach
                </div>
                <div class="product-carousel-thumbs">
                    @foreach($images as $key => $image)
                    <a href="#{{$image->id}}">
                        <img class="img-responsive" src="{{ Image::url(asset('storage/images/image_temp/'.$images[$key]['images']->image_name),100,100,array('crop','')) }}"
                            alt="">
                    </a>
                    @endforeach
                </div>
                @endisset
            </div>
            <div class="col-sm-7 col-sm-pull-5">
                @foreach($blogs as $blog)
                <article class="post-article">
                    <h1>{{$blog->title}}</h1>
                    <small>{{$blog->created_at}}</small>
                    <br>
                    <span>Posted by:
                        <strong>Diana Pampols</strong>
                    </span>
                    <br>
                    <br> {!! $blog->description !!}
                    <div class="share fright">
                        <div id="shareRoundIcons"></div>
                    </div>


                </article>
                @endforeach
            </div>
        </div>
        <div class="empty-space-80"></div>
        <div id="disqus_thread"></div>
        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

            var disqus_config = function () {
                this.page.url = '{{ url()->current() }}'; // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = '{{ url()->current() }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };

            (function () { // DON'T EDIT BELOW THIS LINE
                var d = document,
                    s = d.createElement('script');
                s.src = 'https://teste-j3wyksvwj1.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
    </div>
</section>
<div class="empty-space-80"></div>
<!-- BLOG SECTION-->
@endsection