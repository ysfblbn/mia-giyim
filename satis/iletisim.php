<?php include 'header.php' ?>;

<?php
$iletisim = $db->prepare("SELECT * FROM  iletisim");
$iletisim->execute();
$iletisimCek = $iletisim->fetch(PDO::FETCH_ASSOC);
?>
		<div class="main" id="main">


			<section class="page-banner">
				<div class="container">
					<div class="page-banner-in">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-12">
								<h1 class="page-banner-title text-uppercase">İletişim</h1>
							</div>
							<div class="col-xl-6 col-lg-6 col-12">
								<ul class="right-side">
									<li><a href="anasayfa.php">Anasayfa</a></li>
									<li>İletişim</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="contact-map pt-100">
				<div class="container">
					<div class="add-map">
		                <iframe src="<?= $iletisimCek["iletisimMapsUrl"]; ?>" width="1725" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		            </div>
				</div>
			</div>

			<section class="contact-form pt-100">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="contact-box">
								<ul>
									<li>
					                    <div class="contact-thumb">
					                        <img src="images/location.png" alt="location">
					                    </div>
					                    <div class="contact-box-detail">
					                        <h2 class="contact-title text-uppercase">Adres</h2>
					                       <a href="<?= $iletisimCek["iletisimMapsUrl"]; ?>"> <p><?= $iletisimCek["iletisimAdres"]; ?></p></a>
					                    </div>
					                </li>
					                <li>
					                    <div class="contact-thumb">
					                        <img src="images/mail.png" alt="mail">
					                    </div>
					                    <div class="contact-box-detail">
					                        <h2 class="contact-title text-uppercase">E-posta</h2>
					                        <a href="<?= $iletisimCek["iletisimMail"]; ?>"><?= $iletisimCek["iletisimMail"]; ?></a>
					                    </div>
					                </li>
					                <li>
					                    <div class="contact-thumb">
					                        <img src="images/admin.png" alt="user">
					                    </div>
					                    <div class="contact-box-detail">
					                        <h2 class="contact-title text-uppercase">Telefon</h2>
					                        <a href="tel:<?= $iletisimCek["iletisimTel"]; ?>"><?= $iletisimCek["iletisimTel"]; ?></a>
					                    </div>
					                </li>
								</ul>
							</div>
						</div>
						<div class="col-md-8">
							<div class="contact-form-detail">
								<h2 class="contact-head text-uppercase">Mesaj Bırakın</h2>
								<form method="POST" action="sendmail.php">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="İsim Soyisim*" name="name" required>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="E-posta Adresiniz*" name="mail" required>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Telefon Numaranız*" name="tel" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<textarea class="form-control" placeholder="Mesajınız" name="message"></textarea>
											</div> 
										</div>
										<div class="col-12">
											<button class="btn btn-color" name="formGonder">Gönder</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="top-scrolling">
				<a href="#main" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
			</div>

			<?php include 'e-bulten.php'; ?>

			<?php include 'footer.php'; ?>
