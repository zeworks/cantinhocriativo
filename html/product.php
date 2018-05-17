<?php include 'html_inicial.php' ?>
<!-- banner - large -->
<section>
    <div class="institutional-banner">
        <div class="image-bg" style="background-image: url(https://dummyimage.com/1920x900/f2f2f2/000)"></div>
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
                        <a href="#home" title="home">Home</a>
                    </li>
                    <li>
                        <a href="products.php" title="Products">Products</a>
                    </li>
                    <li>
                        <a href="product.php" title="Product Name">Product Name</a>
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
                <div class="owl-carousel owl-theme product-carousel">
                    <div class="item" data-hash="1">
                        <img class="img-responsive zoom-image" src="https://dummyimage.com/750x500/000/fff" alt="" data-zoom-image="https://dummyimage.com/900x900/000/fff">
                    </div>
                    <div class="item" data-hash="2">
                        <img class="img-responsive zoom-image" src="https://dummyimage.com/750x500/ddd/000" alt="" data-zoom-image="https://dummyimage.com/900x900/ddd/000">
                    </div>
                </div>
                <div class="product-carousel-thumbs">
                    <a href="#1">
                        <img class="img-responsive" src="https://dummyimage.com/80x80/ddd/000" alt="">
                    </a>
                    <a href="#2">
                        <img class="img-responsive" src="https://dummyimage.com/80x80/ddd/000" alt="">
                    </a>
                </div>
            </div>
            <!-- product description -->
            <div class="col-sm-6 col-lg-5 col-lg-offset-1">
                <!-- se no BO estiver como NOVO: -->
                <span class="product-detail__tag">novo</span>
                <h1>Nome do Produto</h1>
                <span class="product-card__category">Category Product</span>
                <div class="product-detail__rating">
                    <div class="row">
                        <!-- product reference -->
                        <div class="col-sm-4 col-md-3">
                            <p>ref: 10237126</p>
                        </div>
                        <!-- number of comments -->
                        <div class="col-sm-4 col-md-5">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <a href="#" title="0 Comentarios" class="hidden-sm">(0) Comentários</a>
                        </div>
                        <!-- wishlist -->
                        <div class="col-sm-4 col-md-4">
                            <a href="#addWishlist" title>
                                <i class="far fa-heart"></i> <span class="hidden-sm">Adicionar à Wishlist</span></a>
                        </div>
                    </div>
                </div>
                <div class="product-detail__desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus
                        doloribus soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum
                        et enim repudiandae?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus
                        doloribus soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum
                        et enim repudiandae?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus
                        doloribus soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum
                        et enim repudiandae?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus
                        doloribus soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum
                        et enim repudiandae?</p>
                    <div class="product-available__items">
                        <h4>Cores disponivéis</h4>
                        <input type="hidden" id="color_available">
                        <div class="available__items">
                            <button type="button" class="item" data-color="black"></button>
                            <button type="button" class="item" data-color="red"></button>
                            <button type="button" class="item" data-color="#555"></button>
                            <button type="button" class="item" data-color="#f2f2f2"></button>
                            <button type="button" class="item" data-color="#999"></button>
                            <button type="button" class="item" data-color="#333"></button>
                            <button type="button" class="item" data-color="#DDD"></button>
                            <button type="button" class="item" data-color="#555"></button>
                            <button type="button" class="item" data-color="#f2f2f2"></button>
                        </div>
                    </div>
                </div>
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
            </div>
        </div>
    </div>
</article>
<!-- /PRODUCT DETAIL -->
<div class="empty-space-80"></div>
<!-- TABS -->
<section id="tabs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="tabs">
                    <div class="tabs__head">
                        <span class="hidden-sm hidden-md hidden-lg hidden-xl caret-down"><i class="fas fa-caret-down"></i></span>
                        <span class="item-selected"></span>
                        <a href="#details" class="tabs__btn selected" title>Detalhes</a>
                        <a href="#mpagamento" class="tabs__btn" title>Métodos de Pagamento</a>
                        <a href="#way_delivery" class="tabs__btn" title>Métodos de Entrega</a>
                        <span class="fright hidden-xs">Encomendar por e-mail: <strong>info@cantinhocriativo.pt</strong></span>
                    </div>
                    <div class="tabs__body">
                        <div id="details" class="tabs__body_item">
                            <h4>REF:: 9172364</h4>
                            <p>Aqui terá uma informação detalhada do meu
                                <strong>produto</strong>
                            </p>
                            <ul>
                                <li>
                                    <p>lorem ipsum</p>
                                    <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem
                                        ipsum
                                    </p>
                                </li>
                            </ul>
                            <div class="share">
                                <p>Share this</p>
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
                        </div>
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
                    <div class="col-sm-6 col-md-4 col-lg-3" data-mh="product-item">
                        <div class="product-card">
                            <a href="product.php" title="product title">
                                <img class="img-responsive" src="https://dummyimage.com/345x345/f2f2f2/000" alt="">
                            </a>
                            <a href="product.php" title="product title">
                                <span class="product-card__category">Category Product</span>
                                <h4 class="product-card__title">Product Name</h4>
                            </a>
                            <span class="product-card__price">10€</span>
                            <span class="product-card__oldprice">19€</span>
                            <div class="clearfix"></div>
                            <a href="product.php" class="btn btn-default">Visualizar</a>
                            <button type="button" class="btn btn-primary buy-item">Comprar</button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" data-mh="product-item">
                        <div class="product-card">
                            <a href="product.php" title="product title">
                                <img class="img-responsive" src="https://dummyimage.com/345x345/f2f2f2/000" alt="">
                            </a>
                            <a href="product.php" title="product title">
                                <span class="product-card__category">Category Product</span>
                                <h4 class="product-card__title">Product Name</h4>
                            </a>
                            <span class="product-card__price">10€</span>
                            <span class="product-card__oldprice">19€</span>
                            <div class="clearfix"></div>
                            <a href="product.php" class="btn btn-default">Visualizar</a>
                            <button type="button" class="btn btn-primary buy-item">Comprar</button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" data-mh="product-item">
                        <div class="product-card">
                            <a href="product.php" title="product title">
                                <img class="img-responsive" src="https://dummyimage.com/345x345/f2f2f2/000" alt="">
                            </a>
                            <a href="product.php" title="product title">
                                <span class="product-card__category">Category Product</span>
                                <h4 class="product-card__title">Product Name</h4>
                            </a>
                            <span class="product-card__price">10€</span>
                            <span class="product-card__oldprice">19€</span>
                            <div class="clearfix"></div>
                            <a href="product.php" class="btn btn-default">Visualizar</a>
                            <button type="button" class="btn btn-primary buy-item">Comprar</button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" data-mh="product-item">
                        <div class="product-card">
                            <a href="product.php" title="product title">
                                <img class="img-responsive" src="https://dummyimage.com/345x345/f2f2f2/000" alt="">
                            </a>
                            <a href="product.php" title="product title">
                                <span class="product-card__category">Category Product</span>
                                <h4 class="product-card__title">Product Name</h4>
                            </a>
                            <span class="product-card__price">10€</span>
                            <span class="product-card__oldprice">19€</span>
                            <div class="clearfix"></div>
                            <a href="product.php" class="btn btn-default">Visualizar</a>
                            <button type="button" class="btn btn-primary buy-item">Comprar</button>
                        </div>
                    </div>
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

        // var disqus_config = function () {
        // this.page.url = "product.php";  // Replace PAGE_URL with your page's canonical URL variable
        // this.page.identifier = "123"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        // };

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
<?php include 'html_final.php' ?>