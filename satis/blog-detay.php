<?php include 'header.php' ?>
<?php
$blogDetaySeo       	=   $_GET["blogDetaySeo"];
$blogDetay = $db->prepare("SELECT * FROM  blogdetay WHERE blogDetaySeo=?");
$blogDetay->execute(array($blogDetaySeo));
$blogDetayCek = $blogDetay->fetch(PDO::FETCH_ASSOC);
?>
<div class="main" id="main">
	<section class="page-banner">
		<div class="container">
			<div class="page-banner-in">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-12">
						<h1 class="page-banner-title text-uppercase">Blog</h1>
					</div>
					<div class="col-xl-6 col-lg-6 col-12">
						<ul class="right-side">
							<li><a href="<?= $domain; ?>anasayfa">Anasayfa</a></li>
							<li><a href="<?= $domain; ?>blog">Blog</a></li>
							<li>Blog Detay</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="pt-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
				<h2 style="text-align: center;"><?=$blogDetayCek["blogDetayBaslik"]; ?></h2><br>
					<div class="blog-detail-img">
						<img src="<?= $domain; ?>images/<?=$blogDetayCek["blogDetayFoto"]; ?>" alt="blog">
					</div>		
					<div class="blog-detail-contain" style="text-align: center;" >
						<p><?=$blogDetayCek["blogDetayYazi"]; ?></p>
						
					</div>
				</div>
			</div>
		</div>
	</section>



	<?php include 'e-bulten.php' ?>

	<?php include 'footer.php'; ?>