		<!-- Cookies -->
		<div class="cookies-bar">
            <div class="container">
                <div class="cookies-bar-inner">
                    <div class="cookies-bar-message">Os cookies ajudam-nos a oferecer os nossos serviços. Ao utilizar os nossos serviços, concorda com a nossa utilização de cookies.</div>
                    <div class="cookies-bar-buttons">
                        <a href="" rel="nofollow" class="cookies-bar-know-more" title="" target="_blank">Saiba mais</a>
                        <a href="" rel="nofollow" class="cookies-bar-accept" title="" id="removecookie">Aceito</a>
                    </div>
                </div>
            </div>
        </div>
		<!-- Cookies ends -->
		<?php define('LOCAL', 'local'); ?>
		<?php if ( LOCAL != 'local' ) { ?>
		<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=<?php echo LANG; ?>" async defer></script>
		<script>
			var sitekey = <?php echo BO_RECAPTCHA_SITEKEY; ?>;
		</script>
		<?php } ?>
	
		<!-- inject:js -->
		<script src="../assets/vendor.min.js"></script>
		<script src="../assets/js/functions.js"></script>
		<script src="../assets/js/main.js"></script>
		<!-- endinject -->


	</body>
</html>