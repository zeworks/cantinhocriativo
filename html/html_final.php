</main>
<aside class="side-cart">
	<h3>Your Cart Items</h3>
	<p>lorem ipsum some thexasd asdss</p>
	<!-- cart items -->
	<ul class="side-cart__list">
		<li class="side-cart__item">
			<img src="https://dummyimage.com/50x50/ddd/000" alt="">
			<a href="product.php" title="Product Link">Product Name</a>
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
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<!-- website logo -->
				<img class="img-responsive" src="../assets/img/occ_logo.png" alt="">
			</div>
			<div class="col-sm-8">
				<ul class="footer-list">
					<li class="footer-item">
						<a href="#linkFooter" title="footer link" class="footer-link">footer link</a>
					</li>
					<li class="footer-item">
						<a href="#linkFooter" title="footer link" class="footer-link">footer link</a>
					</li>
					<li class="footer-item">
						<a href="#linkFooter" title="footer link" class="footer-link">footer link</a>
					</li>
				</ul>
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
<script src="../assets/vendor.min.js" defer></script>
<script src="../assets/js/app.js" defer></script>
<!-- endinject -->


</body>

</html>