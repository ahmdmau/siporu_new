<?php if (isset($this->session->userdata['logged_in'])) { ?>
	<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/white.png" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Informasi</h3>
					<p>Siporu - Portal Media Informasi, Info Peluang Usaha, Bisnis UKM Riau Indonesia dan Direktori UKM Indonesia Berbasis MEA!</p>
					<p><i class="icon-material-outline-location-on"></i> Jl. Babakan 2, Babakan, Bogor Tengah, Kota Bogor, Jawa Barat 16128</p>
				</div>
				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Kategori Ukm</h3>
						<ul>
							<li><a href="<?= base_url('ukm/kategori/pertanian') ?>"><span>Pertanian</span></a></li>
							<li><a href="<?= base_url('ukm/kategori/perkebunan') ?>"><span>Perkebunan</span></a></li>
							<li><a href="<?= base_url('ukm/kategori/peternakan') ?>"><span>Peternakan</span></a></li>
							<li><a href="<?= base_url('ukm/kategori/perikanan') ?>"><span>Perikanan</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Siporu</h3>
						<ul>
							<li><a href="<?= base_url('ukm') ?>"><span>Telusuri Ukm</span></a></li>
							<li><a href="<?= base_url('berita') ?>"><span>Berita</span></a></li>
							<li><a href="<?= base_url('event') ?>"><span>Event</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Links</h3>
						<ul>
							<li><a href="<?= base_url('kontak') ?>"><span>Kontak</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Akun</h3>
						<ul>
							<li><a href="#sign-in-dialog" class="popup-with-zoom-anim"><span>Masuk</span></a></li>
							<li><a href="#sign-in-dialog" class="popup-with-zoom-anim"><span>Daftar</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2018 <strong>Siporu</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Scripts
================================================== -->
<script src="<?php echo base_url('assets/user/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/jquery-migrate-3.0.0.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/mmenu.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/tippy.all.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/simplebar.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/bootstrap-slider.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/bootstrap-select.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/snackbar.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/clipboard.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/counterup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/magnific-popup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/slick.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/custom.js') ?>"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 

<?php if ($this->session->flashdata('logged_success')) { ?>
	Snackbar.show({
		text: '<?php echo $this->session->flashdata('logged_success'); ?>',
		pos: 'top-center',
		duration: 5000,
		backgroundColor: '#dff0d8',
		textColor: '#3c763d',
		actionText: 'Dismiss',
	});
<?php } ?>

</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>
	
</html>
<?php } else { ?>
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/white.png" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Informasi</h3>
					<p>Siporu - Portal Media Informasi, Info Peluang Usaha, Bisnis UKM Riau Indonesia dan Direktori UKM Indonesia Berbasis MEA!</p>
					<p><i class="icon-material-outline-location-on"></i> Jl. Babakan 2, Babakan, Bogor Tengah, Kota Bogor, Jawa Barat 16128</p>
				</div>
				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Kategori Ukm</h3>
						<ul>
							<li><a href="<?= base_url('ukm/kategori/pertanian') ?>"><span>Pertanian</span></a></li>
							<li><a href="<?= base_url('ukm/kategori/perkebunan') ?>"><span>Perkebunan</span></a></li>
							<li><a href="<?= base_url('ukm/kategori/peternakan') ?>"><span>Peternakan</span></a></li>
							<li><a href="<?= base_url('ukm/kategori/perikanan') ?>"><span>Perikanan</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Siporu</h3>
						<ul>
							<li><a href="<?= base_url('ukm') ?>"><span>Telusuri Ukm</span></a></li>
							<li><a href="<?= base_url('berita') ?>"><span>Berita</span></a></li>
							<li><a href="<?= base_url('event') ?>"><span>Event</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Links</h3>
						<ul>
							<li><a href="<?= base_url('kontak') ?>"><span>Kontak</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Akun</h3>
						<ul>
							<li><a href="#sign-in-dialog" class="popup-with-zoom-anim"><span>Masuk</span></a></li>
							<li><a href="#sign-in-dialog" class="popup-with-zoom-anim"><span>Daftar</span></a></li>
						</ul>
					</div>
				</div>
				<!-- Newsletter -->
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2018 <strong>Siporu</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#login">Log In</a></li>
			<li><a href="#register">Register</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Login -->
			<div class="popup-tab-content" id="login">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Selamat Datang di Siporu</h3>
					<span>Belum punya akun? <a href="#" class="register-tab">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" action="<?= base_url('user/login') ?>" id="login-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="email" id="email" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

			<!-- Register -->
			<div class="popup-tab-content" id="register">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Buat Akun Sekarang!</h3>
				</div>

				<form method="POST" id="register-account-form" action="<?php echo base_url('user/register');?>" enctype='multipart/form-data'>
					<div class="input-with-icon-left">
						<i class="icon-feather-user"></i>
						<input type="text" class="input-text with-border" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="email" id="email" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-feather-phone"></i>
						<input type="text" class="input-text with-border" name="no_telp" id="no_telp" placeholder="No telepon" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-location-on"></i>
						<input type="text" class="input-text with-border" name="alamat" id="alamat" placeholder="Alamat" required/>
					</div>

					<input type="file" name="gambar">
				</form>
				
				<!-- Button -->
				<input type="submit" value="Daftar" class="margin-top-10 button full-width button-sliding-icon ripple-effect" form="register-account-form">
				<!-- <button >Register <i class="icon-material-outline-arrow-right-alt"></i></button> -->
				
				
			</div>

		</div>
	</div>
</div>

<!-- Scripts
================================================== -->
<script src="<?php echo base_url('assets/user/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/jquery-migrate-3.0.0.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/mmenu.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/tippy.all.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/simplebar.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/bootstrap-slider.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/bootstrap-select.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/snackbar.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/clipboard.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/counterup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/magnific-popup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/slick.min.js') ?>"></script>
<script src="<?php echo base_url('assets/user/js/custom.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places"></script>

<script src="<?php echo base_url('assets/user/js/maps.js') ?>"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 


<?php if ($this->session->flashdata('msg')) { ?>
	Snackbar.show({
		text: '<?php echo $this->session->flashdata('msg'); ?>',
		pos: 'top-center',
		duration: 5000,
		actionText: "Dismiss",
	}); 

<?php } ?>

<?php if ($this->session->flashdata('msg_error')) { ?>
	Snackbar.show({
		text: '<?php echo $this->session->flashdata('msg_error'); ?>',
		pos: 'top-center',
		duration: 5000,
		backgroundColor: '#f2dede',
		textColor: '#a94442',
		actionText: 'Dismiss',
	}); 



<?php } ?>

<?php if ($this->session->flashdata('error_mail')) { ?>
	Snackbar.show({
		text: '<?php echo $this->session->flashdata('error_mail'); ?>',
		pos: 'top-center',
		duration: 5000,
		backgroundColor: '#f2dede',
		textColor: '#a94442',
		actionText: 'Dismiss',
	}); 
	<?php } ?>

<?php if ($this->session->flashdata('error_cari')) { ?>
	Snackbar.show({
		text: '<?php echo $this->session->flashdata('error_cari'); ?>',
		pos: 'top-center',
		duration: 5000,
		backgroundColor: '#f2dede',
		textColor: '#a94442',
		actionText: 'Dismiss',
	}); 

<?php } ?>


</script>


<!-- Google API -->
	
</html>

<?php } ?>
