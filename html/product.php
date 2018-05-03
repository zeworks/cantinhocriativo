<?php include 'html_inicial.php' ?>
<!-- banner - large -->
<section>
    <!-- <div class="institutional-banner institutional-banner--masked">
        <div class="image-bg" style="background-image: url(https://dummyimage.com/1920x900/fff/000)">
            <div class="wrapper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <strong>SOBRE NÓS</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="institutional-banner">
        <div class="image-bg" style="background-image: url(https://dummyimage.com/1920x900/f2f2f2/000)"></div>
    </div>
</section>
<!-- banner - large ends -->
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
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                <!-- se no BO estiver como NOVO: -->
                <span class="product-detail__tag">novo</span>
                <h1>Nome do Produto</h1>
                <div class="product-detail__rating">
                    <div class="row">
                        <!-- product reference -->
                        <div class="col-sm-4">
                            <p>ref: 10237126</p>
                        </div>
                        <!-- number of comments -->
                        <div class="col-sm-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <a href="#" title="0 Comentarios">(0) Comentários</a>
                        </div>
                        <!-- wishlist -->
                        <div class="col-sm-4">
                            <a href="#addWishlist" title>
                                <i class="far fa-heart"></i> Adicionar à Wishlist</a>
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
                </div>
                <div class="product-detail__price">
                    <span class="price">10€</span>
                    <span class="old-price">19€</span>
                    <span class="discount-date">
                        -10% até 19/07/2018
                    </span>
                </div>
                <div class="product-detail__buy">
                    <form action="" method="post" class="cart-qty clearfix">
                        <button class="cart-qty__btn qty-less" type="button">-</button>
                        <input type="text" name="cart_quant" class="cart-qty__input" value="1">
                        <button class="cart-qty__btn qty-plus" type="button">+</button>
                        <button type="submit" class="btn btn-primary">Adicionar ao carrinho</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</article>
<!-- /PRODUCT DETAIL -->
<div class="empty-space-80"></div>
<!-- RELATED PRODUCTS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">Produtos Relacionados</h2>
                <div class="empty-space-80"></div>
                <div class="row matchheight">
                    <div class="col-md-3" data-mh="product-item">
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
                            <a href="#buyItem" class="btn btn-primary buy-item">Comprar</a>
                        </div>
                    </div>
                    <div class="col-md-3" data-mh="product-item">
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
                            <a href="#buyItem" class="btn btn-primary buy-item">Comprar</a>
                        </div>
                    </div>
                    <div class="col-md-3" data-mh="product-item">
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
                            <a href="#buyItem" class="btn btn-primary buy-item">Comprar</a>
                        </div>
                    </div>
                    <div class="col-md-3" data-mh="product-item">
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
                            <a href="#buyItem" class="btn btn-primary buy-item">Comprar</a>
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
</section>
<!-- /COMMENTS -->
<?php include 'html_final.php' ?>