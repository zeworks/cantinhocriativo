@extends('layouts.default') @section('content')
<section>
    <div class="institutional-banner">
        @foreach($blogs as $blog)
        <div class="image-bg" style="background-image: url('{{ asset('storage/images/'.$blog->featured_image) }}')"></div>
        @endforeach
    </div>
</section>
<!-- BLOG SECTION -->
<div class="empty-space-80"></div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-push-7">
                <div class="empty-space-20"></div>
                <div class="owl-carousel owl-theme product-carousel">
                {{$images}}
                    @foreach($images as $image)
                    <div class="item" data-hash="{{$image->image_id}}">
                        <img class="img-responsive zoom-image" src="{{ asset('storage/images/'.$image->image_name) }}" alt="" data-zoom-image="https://dummyimage.com/900x900/000/fff">
                    </div>
                    @endforeach
                </div>
                <div class="product-carousel-thumbs">
                    <a href="#1">
                        <img class="img-responsive" src="https://dummyimage.com/100x100/ddd/000" alt="">
                    </a>
                    <a href="#2">
                        <img class="img-responsive" src="https://dummyimage.com/100x100/ddd/000" alt="">
                    </a>
                </div>
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

            // var disqus_config = function () {
            //  this.page.url = "product.php";  // Replace PAGE_URL with your page's canonical URL variable
            //  this.page.identifier = "123"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            // };

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