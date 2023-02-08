<?php include 'header.php';
error_reporting(0);
$ara 		=	$_GET["ara"];
?>;
<div class="main" id="main">
	<section class="page-banner">
		<div class="container">
			<div class="page-banner-in">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-12">
						<h1 class="page-banner-title text-uppercase">Ürünler</h1>
					</div>
					<div class="col-xl-6 col-lg-6 col-12">
						<ul class="right-side">
							<li><a href="index.html">Anasayfa</a></li>
							<li>Ürünler</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="product-list">
		<div class="container">
			<div class="row pt-100">
				<div class="col-xl-3 col-lg-4 col-12">
					<div class="sidebar">
						<div class="sidebar-default">
							<div class="category-content">
								<h2 class="cat-title latest-prod text-uppercase">Yeni Ürünler</h2>

								<?php

								
									$urunler = $db->prepare("SELECT * FROM  urunler WHERE urunDurum='1' ORDER BY RAND() LIMIT 5");
									$urunler->execute();
									$urunListele = $urunler->fetchAll(PDO::FETCH_ASSOC);
									foreach ($urunListele as $row) { ?>

										<div class="seller">
											<div class="seller-box align-flax w-100 pb-10">
												<div class="seller-img">
													<a href="<?= $domain; ?>urunler/<?= $row["urunSeo"]; ?>" class="display-b">
														<img src="<?= $domain; ?>images/<?= $row["urunlerFoto"]; ?>" alt="shoes" class="transition">
													</a>
												</div>
												<div class="seller-contain pl-15">
													<a href="<?= $domain; ?>urunler/<?= $row["urunSeo"]; ?>" class="product-name text-uppercase"><?= $row["urunlerBaslik"]; ?></a>
													<span class="product-pricce"><?= $row["urunlerFiyat"]; ?></span>
												</div>
											</div>

										</div>

								<?php }
								 ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-lg-8 col-12">
					<div class="shorting mb-30">
						<div class="row align-flax">
							<div class="col-xl-6 col-lg-5 col-md-6 mb-r-15">

								<div class="short-by"> <span> Ürünler</span>
								</div>
							</div>

						</div>
					</div>
					<div class="featured">
						<div class="row">
							<?php
							if (isset($ara)) {


							$urunler = $db->prepare("SELECT * FROM  urunler WHERE urunlerBaslik LIKE '%$ara%' ");
							$urunler->execute();
							$urunListele = $urunler->fetchAll(PDO::FETCH_ASSOC);
							foreach ($urunListele as $row) { ?>

							
								<div class="featured-product mb-25">
									<div class="product-img transition mb-15">
										<a href="<?= $domain; ?>urunler/<?= $row["urunSeo"]; ?>">
											<img src="<?= $domain; ?>images/<?= $row["urunlerFoto"]; ?>" alt="product" class="transition">
										</a>
										<div class="new-label">
											<span class="text-uppercase"></span>
										</div>
										<div class="product-details-btn text-uppercase text-center transition">
											<a href="<?= $domain; ?>urunler/<?= $row["urunSeo"]; ?>" class="quick-popup">İncele</a>
										</div>
									</div>
									<div class="product-desc">
										<a href="<?= $domain; ?>urunler/<?= $row["urunSeo"]; ?>" class="product-name text-uppercase"><?= $row["urunlerBaslik"]; ?></a>
										<span class="product-pricce"><?= $row["urunlerFiyat"]; ?></span>
									</div>
								</div>
								<?php }
								} else {
							
							$urunler = $db->prepare("SELECT * FROM  urunler");
							$urunler->execute();
							$urunListele = $urunler->fetchAll(PDO::FETCH_ASSOC);
							foreach ($urunListele as $row) {

							?>
								<div class="featured-product mb-25">
									<div class="product-img transition mb-15">
										<a href="<?= $domain; ?>urunler/<?= $row["urunSeo"]; ?>">
											<img src="<?= $domain; ?>images/<?= $row["urunlerFoto"]; ?>" alt="product" class="transition">
										</a>
										<div class="new-label">
											<span class="text-uppercase"></span>
										</div>
										<div class="product-details-btn text-uppercase text-center transition">
											<a href="<?= $domain; ?>urunler/<?= $row["urunSeo"]; ?>" class="quick-popup">İncele</a>
										</div>
									</div>
									<div class="product-desc">
										<a href="<?= $domain; ?>urunler/<?= $row["urunSeo"]; ?>" class="product-name text-uppercase"><?= $row["urunlerBaslik"]; ?></a>
										<span class="product-pricce"><?= $row["urunlerFiyat"]; ?></span>
									</div>
								</div>
							<?php }
							} ?>
						</div>
					</div>
				</div>

			</div>
		</div>
</div>
</section>

<?php include 'e-bulten.php'; ?>

<?php include 'footer.php'; ?>