			<?php include 'header.php' ?>
			<?php

			$blog = $db->prepare("SELECT * FROM  blogdetay");
			$blog->execute();
			$blogCek = $blog->fetch(PDO::FETCH_ASSOC);
			?>


			<section class="page-banner">
				<div class="container">
					<div class="page-banner-in">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-12">
								<h1 class="page-banner-title text-uppercase">Blog</h1>
							</div>
							<div class="col-xl-6 col-lg-6 col-12">
								<ul class="right-side">
									<li><a href="<?= $domain; ?>anasayfa.php">Anasayfa</a></li>
									<li>Blog</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="pt-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8">	
							<div class="blog-right">
								<?php
								$blog = $db->prepare("SELECT * FROM  blogdetay");
								$blog->execute();
								$blogCek = $blog->fetchAll(PDO::FETCH_ASSOC);
								foreach ($blogCek as $row) { ?>

									<div class="row align-flax mb-30">
										<div class="col-xl-5 col-lg-5 col-md-5">
											<div class="latest-blog-img">

												<a href="<?= $domain; ?>blog/<?= $row["blogDetaySeo"] ?>" class="display-b">
													<img src="<?= $domain; ?>images/<?= $row["blogDetayFoto"]; ?>" alt="blog">
												</a>
											</div>
										</div>
										<div class="col-xl-7 col-lg-7 col-md-7">
											<div class="lat-blog-desc">
												<a href="<?= $domain; ?>blog/<?= $row["blogDetaySeo"] ?>" class="lat-blog-title text-uppercase"><?= $row["blogDetayBaslik"]; ?></a>
												<p class="lat-blog-detail"><?= $row["blogDetayYazi"]; ?></p>
												<a href="<?= $domain; ?>blog/<?= $row["blogDetaySeo"] ?>" class="btn-2">Devamını Oku</a>
											</div>
										</div>
									</div>
								<?php	} ?>

							</div>
						</div>
						<div class="col-xl-3 col-lg-4">
							<div class="blog-sidebar">

								<div class="blog-categories">
									<h2 class="blog-sidebar-title text-uppercase">Öne Çıkan Yazılar</h2>
									<div class="recent-blog">

									<?php
								$blog = $db->prepare("SELECT * FROM  blogdetay  WHERE blogDetayDurum='1' ORDER BY RAND()");
								$blog->execute();
								$blogCek = $blog->fetchAll(PDO::FETCH_ASSOC);
								foreach ($blogCek as $row) { ?>

										<div class="recent-blog-box">

											<div class="recent-img">
												<a href="<?= $domain; ?>blog/<?= $row["blogDetaySeo"] ?>">
												<img src="<?= $domain; ?>images/<?= $row["blogDetayFoto"]; ?>" alt="blog" ></a>
											</div>
											<div class="recent-des">
												<div class="text-overflow">
													<a href="<?= $domain; ?>blog/<?= $row["blogDetaySeo"] ?>" class="blog-name"><?= $row["blogDetayBaslik"]; ?></a>
												</div>
												<p><?= $row["blogDetayYazi"]; ?></p>
											</div>
										</div>
										<?php } ?>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
		
			<?php include 'e-bulten.php' ?>


			<?php include 'footer.php'; ?>