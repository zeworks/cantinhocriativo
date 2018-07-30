<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Website theme color -->
	<meta name="theme-color" content="#F1E3DD">
	
	<!-- Website desc -->
	<title>{{$settings[0]->website_name}}</title>
	<meta name="description" content="{{$settings[0]->website_desc}}">
	<meta name="keywords" content="">

	<!-- Facebook meta tags -->
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:site_name" content="">
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:image" content="">

	<!-- Twitter meta tags -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@site_account">
	<meta name="twitter:creator" content="@individual_account">
	<meta name="twitter:url" content="http://example.com/page.html">
	<meta name="twitter:title" content="Content Title">
	<meta name="twitter:description" content="Content description less than 200 characters">
	<meta name="twitter:image" content="http://example.com/image.jpg">

	<!-- Google Plus meta tags -->
	<link href="https://plus.google.com/+YourPage" rel="publisher">
	<meta itemprop="name" content="Content Title">
	<meta itemprop="description" content="Content description less than 200 characters">
	<meta itemprop="image" content="http://example.com/image.jpg">

	<link rel="dns-prefetch" href="https://ssl.google-analytics.com/">
	<link rel="dns-prefetch" href="//connect.facebook.net">

	<!-- Website icons -->
	<link href="{{asset('assets/img/favicon-192x192.png')}}" rel="icon" sizes="192x192">
	<link href="{{asset('assets/img/favicon-180x180.png')}}" rel="apple-touch-icon" sizes="180x180">

	<!-- Font Awesome icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
	    crossorigin="anonymous">

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('assets/vendor.min.css') }}">
	<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<!-- endinject -->
</head>

<body>
	<header>
		<div class="container">
			<div class="row matchheight">
				<div class="col-sm-2 col-xs-6" data-mh="height-menu">
					<!-- website logo -->
					<a class="logo-link" href="../" title>
						<img class="logo-image" src="../assets/img/LOGO_JUSTFORYOU.png" alt="">
					</a>
				</div>
				<div class="col-sm-10">
					<!-- menu links -->
					<ul class="menu hidden-xs">
						@foreach($urls as $url)
						<li class="menu__item">
							<a href="../{{ $url->slug }}" title="{{$url->title}}" class="menu__item__link">{{$url->title}}</a>
						</li>
						@endforeach 
						@if($settings[0]->website_mode_store == 'on')
						<li class="menu__item">
							<a href="login.php" title="User Account" class="menu__item__link menu__item__link--icon">
								<i class="fas fa-user"></i>
							</a>
						</li>
						<li class="menu__item">
							<a href="wishlist.php" title="Your Wishlist" class="menu__item__link menu__item__link--icon">
								<i class="fas fa-heart"></i>
							</a>
						</li>
						<li class="menu__item">
							<a href="#cartShopping" title="Cart Shopping" class="menu__item__link menu__item__link--icon cart-shopping">
								<i class="fas fa-shopping-cart">
									<span></span>
								</i>
							</a>
						</li>
						@endif
					</ul>
				</div>
				<div class="col-xs-6 hidden-sm hidden-md hidden-lg hidden-xl" data-mh="height-menu">
					<button type="button" class="btn-menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					@if($settings[0]->website_mode_store == 'on')
					<ul class="menu--mobile">
						<li class="menu__item">
							<a href="login.php" title="User Account" class="menu__item__link menu__item__link--icon">
								<i class="fas fa-user"></i>
							</a>
						</li>
						<li class="menu__item">
							<a href="wishlist.php" title="Your Wishlist" class="menu__item__link menu__item__link--icon">
								<i class="fas fa-heart"></i>
							</a>
						</li>
						<li class="menu__item">
							<a href="#cartShopping" title="Cart Shopping" class="menu__item__link menu__item__link--icon cart-shopping">
								<i class="fas fa-shopping-cart">
									<span></span>
								</i>
							</a>
						</li>
					</ul>
					@endif
					<!-- menu hamburger -->
				</div>
			</div>
		</div>
	</header>
	<main>
		@yield('content')
	</main>
	@if($settings[0]->website_mode_store == 'on')
	<aside class="side-cart">
		<h3>Your Cart Items</h3>
		<p>lorem ipsum some thexasd asdss</p>
		<!-- cart items -->
		<ul class="side-cart__list">
			<li class="side-cart__item">
				<img src="https://dummyimage.com/50x50/ddd/000" alt="">
				<a href="product.php" title="Product Link">Product Name</a>
				<div class="product-available__items">
					<div class="available__items">
						Cor:
						<span class="item" data-color="black"></span>
					</div>
				</div>
				<div class="clearfix"></div>
				<form action="" method="post" class="cart-qty clearfix">
					<button class="cart-qty__btn qty-less" type="button">-</button>
					<input type="text" name="cart_quant" class="cart-qty__input">
					<button class="cart-qty__btn qty-plus" type="button">+</button>
					<a href="#" class="side-cart__del">eliminar</a>
				</form>
				<span class="cart-item__value">100€</span>
			</li>

			<li class="side-cart__item">
				<img src="https://dummyimage.com/50x50/ddd/000" alt="">
				<a href="product.php" title="Product Link">Product Name</a>
				<div class="product-available__items">
					<div class="available__items">
						Cor:
						<span class="item" data-color="black"></span>
					</div>
				</div>
				<div class="clearfix"></div>
				<form action="" method="post" class="cart-qty clearfix">
					<button class="cart-qty__btn qty-less" type="button">-</button>
					<input type="text" name="cart_quant" class="cart-qty__input">
					<button class="cart-qty__btn qty-plus" type="button">+</button>
					<a href="#" class="side-cart__del">eliminar</a>
				</form>
				<span class="cart-item__value">100€</span>
			</li>
			<li class="side-cart__item">
				<img src="https://dummyimage.com/50x50/ddd/000" alt="">
				<a href="product.php" title="Product Link">Product Name</a>
				<div class="product-available__items">
					<div class="available__items">
						Cor:
						<span class="item" data-color="black"></span>
					</div>
				</div>
				<div class="clearfix"></div>
				<form action="" method="post" class="cart-qty clearfix">
					<button class="cart-qty__btn qty-less" type="button">-</button>
					<input type="text" name="cart_quant" class="cart-qty__input">
					<button class="cart-qty__btn qty-plus" type="button">+</button>
					<a href="#" class="side-cart__del">eliminar</a>
				</form>
				<span class="cart-item__value">100€</span>
			</li>
			<li class="side-cart__item">
				<img src="https://dummyimage.com/50x50/ddd/000" alt="">
				<a href="product.php" title="Product Link">Product Name</a>
				<div class="product-available__items">
					<div class="available__items">
						Cor:
						<span class="item" data-color="red"></span>
					</div>
				</div>
				<div class="clearfix"></div>
				<form action="" method="post" class="cart-qty clearfix">
					<button class="cart-qty__btn qty-less" type="button">-</button>
					<input type="text" name="cart_quant" class="cart-qty__input">
					<button class="cart-qty__btn qty-plus" type="button">+</button>
					<a href="#" class="side-cart__del">eliminar</a>
				</form>
				<span class="cart-item__value">100€</span>
			</li>
		</ul>
		<!-- cart items ends -->
		<!-- cart items total -->
		<div class="side-cart__total">
			<div class="clearfix"></div>
			<span class="side-cart__total-total">
				Total
			</span>
			<span class="side-cart__total-value">
				200€
			</span>
		</div>
		<!-- cart items total ends -->
		<div class="clearfix"></div>
		<div class="side-cart__buttons">
			<a href="cart.php" title="Ir para o checkout" class="btn btn-primary">Ir para o checkout</a>
			<a href="#keepshopping" title="Fechar" class="btn btn-default">Fechar</a>
		</div>
	</aside>
	@endif
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<!-- website logo -->
					<img class="img-responsive" src="../assets/img/LOGO_JUSTFORYOU.png" alt="">
				</div>
				<div class="col-sm-4">
					<ul class="footer-list">
						@foreach($urls as $url)
						<li class="footer-item">
							<a href="#linkFooter" title="{{$url->slug}}" class="footer-link">{{$url->title}}</a>
						</li>
						@endforeach
					</ul>
				</div>
				<div class="col-sm-4">
					<h4>Subscreva a nossa newsletter</h4>
					<small>Subscreve para seres dos primeiros a receber as novidades da
						<strong>Just FOR YOU</strong>
					</small>
					<form action="{{url('subscribe')}}" method="post" class="form validate-form inputs--inline clearfix">
						<div class="form-field">
							<input type="email" class="required-email form-control" placeholder="email@mail.com" name="email_newsletter" id="email_newsletter">
						</div>
						@csrf
						<button type="submit" class="btn btn-primary fright">Subscrever</button>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<br>
					<small>&copy;
						<?= date('Y'); ?> Todos os direitos reservados</small>
				</div>
			</div>
		</div>
	</footer>
	<!-- loading -->
	<div class="loading">
		<img class="loading-img img-responsive" src="{{asset('assets/img/LOGO_JUSTFORYOU.png')}}" alt="">
	</div>
	<!-- end:loading -->
	<!-- Cookies -->
	<div class="cookies-bar">
		<div class="cookies-bar-inner clearfix">
			<h4>Política de Cookies</h4>
			<div class="cookies-bar-message">Os cookies ajudam-nos a oferecer os nossos serviços. Ao utilizar os nossos serviços, concorda com a nossa utilização de
				cookies.
			</div>
			<div class="cookies-bar-buttons">
				<a href="" rel="nofollow" class="cookies-bar-know-more btn btn-default" title="" target="_blank">Saiba mais</a>
				<a href="" rel="nofollow" class="cookies-bar-accept btn btn-primary" title="" id="removecookie">Aceito</a>
			</div>
		</div>
	</div>
	<!-- Cookies ends -->
	<?php define('LOCAL', 'local'); ?>
	<?php if ( LOCAL != 'local' ) { ?>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=<?php echo LANG; ?>" async
	    defer></script>
	<script>
		var sitekey = <?php echo BO_RECAPTCHA_SITEKEY; ?>;
	</script>
	<?php } ?>
	<script id="dsq-count-scr" src="//teste-j3wyksvwj1.disqus.com/count.js" async></script>
	<!-- inject:js -->
	<script src="{{ asset('assets/vendor.min.js') }}" defer></script>
	<script src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js" defer></script>
	<script src="{{ asset('assets/js/app.js') }}" defer></script>
	<!-- endinject -->
</body>

</html>