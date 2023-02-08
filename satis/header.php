<?php include 'sistem/baglan.php' ?>
<?php
$logo = $db->prepare("SELECT * FROM  logo_icon");
$logo	->execute();
$logoCek = $logo->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?= $logoCek["title"]; ?></title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link type="image/x-icon" href="images/<?= $logoCek["icon"]; ?>" rel="icon">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= $domain ?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $domain ?>css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= $domain ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $domain ?>css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="<?= $domain ?>css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= $domain ?>css/shoes.css">
	<link rel="stylesheet" type="text/css" href="<?= $domain ?>css/responsive.css">

	<style>
		.urunBoyutlandir{
			height: 500px;
			margin-left: 5rem;
		}

		@media only screen and (max-width:959px) { 
			.urunBoyutlandir{
			margin-left: 2rem;
			margin-right: 2.2rem;
			margin-bottom:-10rem;
		}
}

	</style>
</head>

<body>

	<!-- Start preloader -->
	<!-- End preloader -->

	<!-- Search Screen start -->
	<div class="sidebar-search-wrap">
		<div class="sidebar-table-container">
			<div class="sidebar-align-container">
				<div class="search-closer right-side"></div>
				<div class="search-container">
					<form method="get" id="search-form" action="urunler">
						<input type="text" id="s" class="search-input" name="search" placeholder="Search text">
					</form>
					<span>Search and Press Enter</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Search Screen end -->



	<div class="main" id="main">
		<header class="header transition">
			<div class="container position-r">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-6 align-flax">
						<div class="navbar-header">
							<a class="navbar-brand" href="<?= $domain ?>anasayfa">
								<img alt="log" src="<?= $domain ?>images/<?= $logoCek["logo"]; ?>" class="transition">
							</a>
						</div>
					</div>
					<div class="col-lg-10 col-md-8 col-6 position-i">
						<div class="menu-left transition">
							<div class="menu">
								<ul>
									<li>
										<a href="<?= $domain ?>anasayfa">Anasayfa</a>
									</li>
									<li>
										<a href="<?= $domain ?>urunler">Ürünler</a>
										
									</li>
									<li>
										<a href="<?= $domain ?>hakkimizda">Hakkımızda</a>
									</li>
									<li class="plus">
										<span class="plus"></span>
										<a href="<?= $domain ?>blog">Blog</a>
									</li>
									<li>
										<a href="<?= $domain ?>iletisim">İletişim</a>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="search-right">
							<div class="menu-toggle"><span></span></div>
							<div class="search-menu">
								<form action="<?= $domain;?>urunler" method="GET" >
								<input type="text" name="ara" class="search-input" placeholder="Ara">
								
								<div class="search-button-i transition">
									<img src="<?= $domain;?>images/search.png" class="position-r transition" alt="search">
								</div>
								
								</form>
							</div>
							<ul class="login-cart">
								
							
								<li>
									<div class="cart-menu">
										<div class="cart-dropdown header-link-dropdown">
											<ul class="cart-list link-dropdown-list">
												<li>
													<a href="javascript:void(0)" class="close-cart"><i
															class="fa fa-times-circle"></i></a>
													<figure>
														<a href="product-detail.html" class="pull-left">
															<img alt="product" src="images/product-1.jpg">
														</a>
														<figcaption>
															<span>
																<a href="product-detail.html">Men's Full Sleeves Collar
																	Shirt</a>
															</span>
															<p class="cart-price">$14.99</p>
															<div class="product-qty">
																<label>Qty:</label>
																<div class="custom-qty">
																	<input type="text" name="qty" maxlength="8"
																		value="1" title="Qty" class="input-text qty"
																		disabled>
																</div>
															</div>
														</figcaption>
													</figure>
												</li>
												<li>
													<a class="close-cart"><i class="fa fa-times-circle"></i></a>
													<figure>
														<a href="product-detail.html" class="pull-left">
															<img alt="product" src="images/product-2.jpg">
														</a>
														<figcaption>
															<span>
																<a href="product-detail.html">Women's Cape Jacket</a>
															</span>
															<p class="cart-price">$14.99</p>
															<div class="product-qty">
																<label>Qty:</label>
																<div class="custom-qty">
																	<input type="text" name="qty" maxlength="8"
																		value="1" title="Qty" class="input-text qty"
																		disabled>
																</div>
															</div>
														</figcaption>
													</figure>
												</li>
											</ul>
											<p class="cart-sub-totle">
												<span class="pull-left">Cart Subtotal</span>
												<span class="pull-right"><strong
														class="price-box">$29.98</strong></span>
											</p>
											<div class="clearfix"></div>
											<div class="mt-20">
												<a href="cart.html" class="btn">Cart</a>
												<a href="checkout.html" class="btn btn-color right-side">Checkout</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
