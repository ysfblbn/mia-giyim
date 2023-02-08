<?php
$footer = $db->prepare("SELECT * FROM  footer");
$footer->execute();
$footerCek = $footer->fetch(PDO::FETCH_ASSOC);
?>
<?php
$iletisim = $db->prepare("SELECT * FROM  iletisim");
$iletisim->execute();
$iletisimCek = $iletisim->fetch(PDO::FETCH_ASSOC);
?>
<div class="top-scrolling">
	<a href="#main" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>

<footer class="footer pt-100">
	<div class="container">
		<div class="footer-inner">
			<div class="footer-box">
				<div class="footer-logo">
					<a href="<?= $domain;?>anasayfa.php"><img src="<?= $domain;?>images/logo.png" alt="logo"></a>
				</div>
				<p class="footer-desc"><?= $footerCek["footerYazi"]; ?></p>
			</div>
			<div class="footer-box footer-static">
				<span class="opener plus"></span>
				<h2 class="footer-title text-uppercase">Mağazamız</h2>
				<ul class="footer-block-contant">
					<li><a href="<?= $domain;?>urunler.php">Ürünler</a></li>
					<li><a href="<?= $domain;?>blog.php">Blog</a></li>

				</ul>
			</div>
			<div class="footer-box footer-static">
				<span class="opener plus"></span>
				<h2 class="footer-title text-uppercase">BİLGİ</h2>
				<ul class="footer-block-contant">
					<li><a href="<?= $domain;?>hakkimizda.php">Hakkımızda</a></li>
					<li><a href="<?= $domain;?>iletisim.php">İletişim</a></li>

				</ul>
			</div>
			
			<div class="footer-box footer-contact footer-static m-0">
				<span class="opener plus"></span>
				<h2 class="footer-title text-uppercase">İletişim</h2>
				<ul class="footer-block-contant">
					<li><img src="<?= $domain;?>images/cont-1.png" alt="img"><a href="<?= $iletisimCek["iletisimMapsUrl"]; ?>"><?= $iletisimCek["iletisimAdres"]; ?></a><li>
					<li><img src="<?= $domain;?>images/cont-2.png" alt="img"><a href="tel:<?= $iletisimCek["iletisimTel"]; ?>"><?= $iletisimCek["iletisimTel"]; ?></a></li>
					<li><img src="<?= $domain;?>images/cont-3.png" alt="img"><a href="mailto:<?= $iletisimCek["iletisimMail"]; ?>"><?= $iletisimCek["iletisimMail"]; ?></a></li>
				</ul>
			</div>
		</div>
		<div class="copy-right mt-100">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12">
					<p class="copyright-text">&#169; Mia Giyimin tüm hakları Mia Giyim tarafından saklıdır.</p>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12">
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<script src="<?= $domain;?>js/jquery-3.4.1.min.js"></script>
<script src="<?= $domain;?>js/bootstrap.min.js"></script>
<script src="<?= $domain;?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= $domain;?>js/owl.carousel.min.js"></script>
<script src="<?= $domain;?>js/custom.js"></script>
<script>
	/* ------------ Newslater-popup JS Start ------------- */
	$(window).on('load', function() {
		setTimeout(function() {
			mfp = $.magnificPopup.instance;
			if (!mfp.isOpen) {
				jQuery.magnificPopup.open({
					items: {
						src: '#newslater-popup'
					},
					type: 'inline'
				}, 0);
			}
		}, 10000)
	});
	/* ------------ Newslater-popup JS End ------------- */
</script>
</body>

</html>