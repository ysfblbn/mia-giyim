<?php include 'header.php'; 


$urunSeo       	=   $_GET["urunSeo"];
$product		=	$db->prepare("SELECT * FROM urunler WHERE urunSeo=?");
$product		->  execute(array($urunSeo));
$proCek			=	$product->fetch(PDO::FETCH_ASSOC);


?>

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
									<li><a href="shop.html">Ürünler</a></li>
									<li>Ürün Detay </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="product-detail-main pt-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-12">
							<div class="align-center mb-md-30">
					            <ul id="glasscase" class="gc-start">
					                <li class="urunBoyutlandir"><img src="<?= $domain;?>images/<?= $proCek["urunlerFoto"]; ?>" alt="product" width="500" /></li>
					                

					            </ul>
					        </div>
						</div>
						<div class="col-lg-7 col-md-6 col-12">
							<div class="product-detail-in">
								<h2 class="product-item-name text-uppercase"><?= $proCek["urunlerBaslik"]; ?></h2>
								<div class="price-box"> 
									<span class="price"><?= $proCek["urunlerFiyat"]; ?></span> 
				                    
									<div class="product-des">
		                				<p><?= $proCek["urunlerYazi"]; ?></p>
		                			</div>
		                			<ul>
				                        <li><i class="fa fa-check"></i><?= $proCek["urunlerOzellik"]; ?></li>
										<li><i class="fa fa-check"></i><?= $proCek["urunlerOzellik2"]; ?></li>
				                        <li><i class="fa fa-check"></i><?= $proCek["urunlerOzellik3"]; ?></li>

				                    </ul>
				                    
				                </div>
							</div>
						</div>
					</div>
				</div>
			</section>


		

			<?php include 'e-bulten.php'; ?>

			<?php include 'footer.php'; ?>
