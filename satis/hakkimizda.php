<?php include 'header.php' ?>;	
<?php
$hakkimizda = $db->prepare("SELECT * FROM  hakkimizda");
$hakkimizda->execute();
$hakkimizdaCek = $hakkimizda->fetch(PDO::FETCH_ASSOC);
?>
		<div class="main" id="main">
			<section class="page-banner">
				<div class="container">
					<div class="page-banner-in">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-12">
								<h1 class="page-banner-title text-uppercase">Hakkımızda</h1>
							</div>
							<div class="col-xl-6 col-lg-6 col-12">
								<ul class="right-side">
									<li><a href="anasayfa.php">Anasayfa</a></li>
									<li>Hakkımızda</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="pt-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 align-flax order-r-2">
							<div class="about-box about-box-text">
								<h2 class="about-title text-uppercase"><?= $hakkimizdaCek["hakkimizdaBaslik"]; ?></h2>
								<p class="about-des"><?= $hakkimizdaCek["hakkimizdaYazi"]; ?></p>
							</div>
						</div>
						<div class="col-lg-6 order-r-1">
							<div class="about-box">
								<img src="images/<?= $hakkimizdaCek["hakkimizdaFoto"]; ?>" alt="about">
							</div>
						</div>
					</div>
				</div>
			</section>

			

			

			<?php include 'e-bulten.php' ?>

			<?php include 'footer.php'; ?>