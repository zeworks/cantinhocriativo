@extends('layouts.default') @section('content')
<!-- banner - large -->
<section>
    <div class="institutional-banner">
        @foreach($products as $product)
        <div class="image-bg" style="background-image: url('{{ asset('storage/images/'.$product->featured_image) }}')"></div>
        @endforeach
    </div>
</section>
<!-- banner - large ends -->
<div class="empty-space-20"></div>
<!-- BREADCRUMB -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/')}}" title="home">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('produtos')}}" title="Produtos">Produtos</a>
                    </li>
                    <li>
                        @foreach($products as $product)
                        <a href="{{ $product -> slug }}" title="{{ $product -> title }}">{{ $product -> title }}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /BREADCRUMB -->
<!-- PRODUCT DETAIL -->
<article>
    <div class="empty-space-80"></div>
    <div class="container">
        <div class="row">
            <!-- image and details -->
            <div class="col-sm-6">
                @isset($images)
                <div class="owl-carousel owl-theme product-carousel">
                    @foreach($images as $key => $image)
                    <div class="item" data-hash="{{$image->id}}">
                        <img class="img-responsive zoom-image" src="{{ Image::url(asset('storage/images/image_temp/'.$images[$key]['images']->image_name),750,500,array('crop','')) }}"
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
            <!-- product description -->
            <div class="col-sm-6 col-lg-5 col-lg-offset-1">
                <!-- se no BO estiver como NOVO: -->
                @foreach($products as $product) @if($product->new_product)
                <span class="product-detail__tag">novo</span>
                @endif
                <h1>{{ $product->title }}</h1>
                @if($settings[0]->website_mode_store == 'on')
                <span class="product-card__category">{{ $product->title }}</span>
                @endif
                <div class="product-detail__rating">
                    <!-- product reference -->
                    <p>Referência: {{ $product->reference }}</p>
                </div>
                <div class="product-detail__desc">
                    {!! $product->description !!}
                    <div class="product-available__items">
                        <h4>Cores disponivéis</h4>
                        <input type="hidden" id="color_available">
                        <div class="available__items">
                            <?php
                            
                                $colors_array = explode(",", $product->colors); // explode the "array"
                                $count = count($colors_array) - 1; // -1 because there is a , on the final.

                                for ($i=0; $i < $count; $i++) { 
                                    echo "<button type='button' class='item' data-color=".$colors_array[$i]."></button>";
                                }
                                
                            ?>
                        </div>
                    </div>
                </div>
                @if($settings[0]->website_mode_store == 'on')
                <div class="product-detail__price">
                    <span class="price">10€</span>
                    <span class="old-price">19€</span>
                    <span class="discount-date">
                        -10% até 19/07/2018
                    </span>
                </div>
                <div class="product-detail__buy">
                    <div class="clearfix"></div>
                    <form action="" method="post" class="cart-qty cart-qty--large clearfix fleft">
                        <button class="cart-qty__btn qty-less" type="button">-</button>
                        <input type="text" name="cart_quant" class="cart-qty__input" value="1">
                        <button class="cart-qty__btn qty-plus" type="button">+</button>
                    </form>
                    <button type="submit" class="btn btn-primary buy-item fleft">Adicionar ao carrinho</button>
                </div>
                @else
                <button class="open-modal btn btn-primary" data-target="#orderbuy">Informações - {{ $product->title }}</button>
                @endif @endforeach
            </div>
        </div>
    </div>
</article>
<div class="modal" id="orderbuy">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-offset-2 col-md-8">
                <div class="modal-content">
                    <button class="btn-close btn">
                        <i class="fas fa-times"></i>
                    </button>
                    <h3>Informações sobre:
                        <strong>{{$product->title}}</strong>
                    </h3>
                    <div class="empty-space-20"></div>
                    <form action="" class="validate-form form">
                        <div class="form-field">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="required form-control">
                        </div>
                        <div class="form-field">
                            <label for="message_contact">Mensagem*</label>
                            <textarea class="required form-control" name="message_contact" id="message_contact"></textarea>
                        </div>
                        <div class="form-field">
                            <small>
                                A informação que vai enviar será guardada e processada através de email apenas com o propósito de nos contactar. Os dados
                                que irá submeter vão ser utilizados por outros departamentos da
                                <strong>{{ $settings[0]->website_name }}</strong>. A
                                <strong>{{ $settings[0]->website_name }}</strong> irá tratar a sua informação pessoal com toda a
                                confidencialidade e segurança de acordo com o estabelecido nos regulamentos de proteção de
                                dados. Poderá retirar o seu consentimento de utilização dos dados, solicitar a sua correção
                                ou pedir a sua eliminação em qualquer altura. Para tal deverá entrar em contacto connosco
                                através do seguinte endereço de email:
                                <strong>{{ $settings[0]->website_account_email }}</strong>
                            </small>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <label for="terms">
                                            <input type="checkbox" id="terms" name="terms" class="required-radio fleft" required>
                                            <small>Aceito os
                                                <a href="terms.php" target="_blank">termos e condições</a>
                                            </small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary fright">Enviar Mensagem</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /PRODUCT DETAIL -->
<div class="empty-space-80"></div>
<!-- TABS -->
<section id="tabs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="tabs">
                    <div class="tabs__head">
                        <span class="hidden-sm hidden-md hidden-lg hidden-xl caret-down">
                            <i class="fas fa-caret-down"></i>
                        </span>
                        <span class="item-selected"></span>
                        <a href="#details" class="tabs__btn selected" title>Detalhes</a>
                        @if($settings[0]->website_mode_store == 'on')
                        <a href="#mpagamento" class="tabs__btn" title>Métodos de Pagamento</a>
                        <a href="#way_delivery" class="tabs__btn" title>Métodos de Entrega</a>
                        @endif
                        <span class="fright hidden-xs">Informações por e-mail:
                            <strong>{{ $settings[0]->website_account_email }}</strong>
                        </span>
                    </div>
                    <div class="tabs__body">
                        <div id="details" class="tabs__body_item">
                            @foreach($products as $product)
                            <h4>REF:: {{ $product->reference }}</h4>
                            <div>
                                {!! $product->details !!}
                            </div>
                            <div class="share fright">
                                <div id="shareRoundIcons"></div>
                            </div>
                            @endforeach
                        </div>
                        @if($settings[0]->website_mode_store == 'on')
                        <div id="mpagamento" class="tabs__body_item">
                            <!-- <ul class="payment-methods--cart">
                                <li>
                                    <input type="radio" name="payment_method" id="paypal">
                                    <label for="paypal">
                                        <img src="https://dummyimage.com/60x60/777/fff" alt>
                                        <p>Paypal</p>
                                        <span>little description here</span>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" name="payment_method" id="multibanco">
                                    <label for="multibanco">
                                        <img src="https://dummyimage.com/60x60/777/fff" alt>
                                        <p>multibanco</p>
                                        <span>little description here</span>
                                    </label>
                                </li>
                            </ul> -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="payment-methods">
                                        <li>
                                            <img src="https://dummyimage.com/60x60/777/fff" alt>
                                            <p>Paypal</p>
                                            <span>little description here</span>
                                        </li>
                                        <li>
                                            <img src="https://dummyimage.com/60x60/777/fff" alt>
                                            <p>multibanco</p>
                                            <span>little description here</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="way_delivery" class="tabs__body_item">
                            <ul class="way-delivery">
                                <li>
                                    <img src="https://dummyimage.com/60x60/777/fff" alt>
                                    <p>acto de entrega</p>
                                    <span>little description here</span>
                                </li>
                                <li>
                                    <img src="https://dummyimage.com/60x60/777/fff" alt>
                                    <p>Entrega em Aveiro</p>
                                    <span>little description here</span>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /TABS -->
<div class="empty-space-80"></div>
<!-- RELATED PRODUCTS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">Produtos Relacionados</h2>
                <div class="empty-space-80"></div>
                <div class="row matchheight">
                    @foreach($allproducts as $products)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" data-mh="product-item">
                        <div class="product-card">
                            <a href="{{ $products->slug}}" title="{{ $products->slug}}">
                                <img class="img-responsive" src="{{ Image::url(asset('storage/images/'.$products->featured_image),345,345,array('crop','')) }}"
                                    alt="">
                            </a>
                            <a href="{{ $products->slug}}" title="{{ $products->slug}}">
                                @if($settings[0]->website_mode_store == 'on')
                                <span class="product-card__category">Category Product</span>
                                @endif
                                <h4 class="product-card__title">{{ $products->title }}</h4>
                            </a>
                            @if($settings[0]->website_mode_store == 'on')
                            <span class="product-card__price">10€</span>
                            <span class="product-card__oldprice">19€</span>
                            @endif
                            <div class="product-card__smalltext">
                                {!! $products->description !!}
                            </div>
                            <div class="clearfix"></div>
                            <a href="{{ $products->slug}}" class="btn btn-primary btn-block">Visualizar</a>
                            @if($settings[0]->website_mode_store == 'on')
                            <button type="button" class="btn btn-primary buy-item">Comprar</button>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /RELATED PRODUCTS -->
<div class="empty-space-80"></div>
<!-- COMMENTS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="disqus_thread"></div>
            </div>
        </div>
    </div>
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
</section>
<!-- /COMMENTS -->
<div class="empty-space-80"></div>
@if($settings[0]->website_mode_store == 'on')
<div class="float-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-left">
                <h3>Nome do Produto s s ss ss ss s ss ss</h3>
            </div>
            <div class="col-sm-3 text-center">
                <div class="product-detail__price">
                    <span class="price">10€</span>
                    <span class="old-price">19€</span>
                    <span class="discount-date">
                        -10% até 19/07/2018
                    </span>
                </div>
            </div>
            <div class="col-sm-5 text-center">
                <div class="clearfix"></div>
                <form action="" method="post" class="cart-qty cart-qty--large clearfix">
                    <button class="cart-qty__btn qty-less" type="button">-</button>
                    <input type="text" name="cart_quant" class="cart-qty__input" value="1">
                    <button class="cart-qty__btn qty-plus" type="button">+</button>
                </form>
                <button type="submit" class="btn btn-primary buy-item">Adicionar ao carrinho</button>
            </div>
        </div>
    </div>
</div>
@endif @endsection