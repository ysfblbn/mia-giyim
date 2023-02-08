<?php include 'header.php' ?>;
<?php

$banner = $db->prepare("SELECT * FROM  banner");
$banner->execute();
$bannerCek = $banner->fetch(PDO::FETCH_ASSOC);

$urunler = $db->prepare("SELECT * FROM  urunler ");
$urunler->execute();
$urunlerCek = $urunler->fetchAll(PDO::FETCH_ASSOC);


?>

<section class="home-banner">
	<div class="container">
		<div class="home-slider owl-carousel">

			<!-- Slider Başlangıç -->
			<?php
			$slider = $db->prepare("SELECT * FROM  slider");
			$slider->execute();
			$sliderListele = $slider->fetchAll(PDO::FETCH_ASSOC);
			foreach ($sliderListele as $row) { ?>
				<div class="banner-bg align-flax">
					<div class="w-100">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 align-flax">
								<div class="banner-img"><img src="images/<?= $row["sliderFoto"]; ?>" alt="banner"></div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 align-flax">
								<div class="banner-heading w-100">
									<label class="banner-top"><?= $row["sliderUstBaslik"]; ?></label>
									<h2 class="banner-title"><?= $row["sliderBaslik"]; ?></h2>
									<p class="banner-sub"><?= $row["sliderYazi"]; ?></p>
									<a href="urunler" class="btn">İncele</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- Slider Bitiş -->

		</div>
	</div>
</section> 

<section class="featured pt-100">
	<div class="container">
		<div class="row mb-25">
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="hading">
					<h2 class="hading-title">özel <span>Ürünler</span></h2>
				</div>
			</div>

		</div>
		<div class="tab-content">
		<div role="tabpanel" class="row tab-pane fade active show" id="all">
			<!-- Slider Başlangıç -->
			<?php
			$urunler = $db->prepare("SELECT * FROM  urunler  WHERE urunDurum='1' ORDER BY RAND() LIMIT 5");
			$urunler->execute();
			$urunlerCek = $urunler->fetchAll(PDO::FETCH_ASSOC);
			foreach ($urunlerCek as $row) { ?>
				
					<div class="featured-product mb-25">
						<div class="product-img transition mb-15">
							<a href="<?= $domain;?>urunler/<?= $row["urunSeo"];?>">
								<img src="<?= $domain;?>images/<?= $row["urunlerFoto"]; ?>" alt="product" class="transition">
							</a>
							<div class="new-label">
								<span class="text-uppercase">Yeni</span>
							</div>
							<div class="product-details-btn text-uppercase text-center transition">
								<a href="<?= $domain;?>urunler/<?= $row["urunSeo"];?>" class="quick-popup mfp-iframe">ÜrünÜ İncele</a>
							</div>
						</div>
						<div class="product-desc text-center">
							<a href="<?= $domain;?>urunler/<?= $row["urunSeo"];?>" class="product-name text-uppercase"><?= $row["urunlerBaslik"]; ?></a>
							<span class="product-pricce"><?= $row["urunlerFiyat"]; ?> ₺</span>
						</div>
					</div>
				


				
				<?php } ?>
				</div>
		</div>
	</div>
</section>

<section class="offer-banner pt	-70">
	<div class="container">
		<div class="offer-bg bg text-center ptb-120" style="background-image: url(<?= "images/" . $bannerCek["bannerFoto"]; ?>);">

			<label class="banner-top text-uppercase"><?= $bannerCek["bannerUstBaslik"];  ?></label>
			<h1 class="banner-title text-uppercase"><?= $bannerCek["bannerBaslik"];  ?></h1>
			<p class="banner-sub"><?= $bannerCek["bannerYazi"];  ?></p>
			<a href="<?= $domain;?>urunler" class="btn">İncele</a>
		</div>
	</div>
</section>

<section class="best-seller pt-100">
	<div class="container">
		<div class="row" style="margin-left: 40px !important;">
			<!-- Haftanın Teklifi Başlangıç  -->
			<?php
			$teklif = $db->prepare("SELECT * FROM  teklif INNER JOIN urunler WHERE teklif.teklifSeo=urunler.urunSeo");
			$teklif->execute();
			$teklifListele = $teklif->fetchAll(PDO::FETCH_ASSOC);
			foreach ($teklifListele as $row) { ?>
				<div class="offer-week">
					<div class="row align-flax">
						<div class="col-xl-5 col-lg-5 col-md-5">
							<div class="week-img transition">
								<a href="<?= $domain;?>urunler/<?= $row["urunSeo"];?>" class="display-b">
									<img src="<?= $domain; ?>images/<?= $row["teklifFoto"]; ?>" class="w-100" alt="shoes">
								</a>
							</div>
						</div>
						<div class="col-xl-7 col-lg-7 col-md-7">
							<div class="week-contain">
								<h2 class="week-head text-uppercase pb-15"><?= $row["teklifBaslik"]; ?></h2>
								<p class="week-sub"><?= $row["teklifYazi"]; ?></p>

								<div class="price-d pb-25">
									<label class="price-r pr-30"><?= $row["teklifEskiFiyat"]; ?></label>
									<label class="price-o"><?= $row["teklifYeniFiyat"]; ?></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- Haftanın Teklifi Bitiş  -->
		</div>
	</div>
</section>







<?php include 'e-bulten.php' ?>

<?php include 'footer.php'; ?>