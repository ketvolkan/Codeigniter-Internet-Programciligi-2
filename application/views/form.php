<?php include "includes/header.php"; ?>

<div class="container-contact100">
	<div class="wrap-contact100">
		<form method="POST" action="<?php echo base_url("formApp/insert") ?> " class="contact100-form validate-form">
			<span class="contact100-form-title">
				Formu doldurunuz.
			</span>

			<div class="wrap-input100 validate-input" data-validate="Bu alan zorunludur.">
				<span class="label-input100">İsminiz</span>
				<input class="input100" type="text" name="name" placeholder="İsminizi Giriniz.">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate="Bu alan zorunludur: ex@abc.xyz">
				<span class="label-input100">Email</span>
				<input class="input100" type="text" name="email" placeholder="E-mail adresinizi giriniz.">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Hizmet Seçiniz</span>
				<div>
					<select class="selection-2" name="service">
						<option>Hizmet Seçiniz</option>
						<?php
						foreach ($services as $service) {
						?>
							<option value="<?php echo $service->id; ?>">
								<?php echo $service->service; ?>
							</option>

						<?php
						}
						?>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Maaş</span>
				<div>
					<select class="selection-2" name="budget">
						<option>Maaş Seçiniz</option>
						<?php for ($i = 1; $i <= 30; $i++) {
						?>
							<option><?php echo $i * 500 ?></option>
						<?php
						} ?>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate="Bu alan zorunludur">
				<span class="label-input100">Mesajınız</span>
				<textarea class="input100" name="message" placeholder="Mesajınızı buraya yazabilirsiniz..."></textarea>
				<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<div class="wrap-contact100-form-btn">
					<div class="contact100-form-bgbtn"></div>
					<button class="contact100-form-btn">
						<span>
							Formu Gönder
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/bootstrap/js/popper.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/select2/select2.min.js"></script>
<script>
	$(".selection-2").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect1')
	});
</script>
<!--===============================================================================================-->
<script src="assets/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="assets/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>
<?php include "includes/footer.php"; ?>