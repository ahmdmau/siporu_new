<?php $this->load->view("__partials/header.php") ?>

<?php if (isset($this->session->userdata['logged_in'])) {
					$nama = ($this->session->userdata['logged_in']['nama_lengkap']);
					$email = ($this->session->userdata['logged_in']['email']);
					$id_pembeli = ($this->session->userdata['logged_in']['id_pembeli']);
}?>
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>

				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Dashboard">
							<li><a href="<?= base_url('user/dashboard') ?>"><i class="icon-material-outline-dashboard"></i>
									Dashboard</a></li>
							<li class="active"><a href="<?= base_url('user/konfirmasi_pesanan') ?>"><i class="icon-material-outline-shopping-cart"></i>
									Konfirmasi Pesanan</a></li>
							<li><a href="<?= base_url('user/riwayat_pesanan') ?>"><i class="icon-material-outline-question-answer"></i>
									Riwayat Transaksi</a></li>
						</ul>
						<ul data-submenu-title="Account">
							<li><a href="<?= base_url('user/setting') ?>"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner">

			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Selamat Datang,
					<?php echo $nama; ?>
				</h3>
				<span>Kami senang melihat Anda lagi!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="<?= base_url()?>">Home</a></li>
						<li>Konfirmasi Pesanan</li>
					</ul>
				</nav>
			</div>



			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">
						<div class="headline">
							<h3><i class="icon-material-outline-assignment"></i> Konfirmasi Pesanan</h3>
						</div>
						<div class="content" >
							<?php if ($this->session->flashdata('error')): ?>
							<div class="notification error closeable">
								<p><?php echo $this->session->flashdata('error'); ?></p>
								<a class="close"></a>
							</div>
							<?php endif; ?>
							</div>
							<form action="<?= base_url('user/konfirmasi_pesanan') ?>" method="post" style="padding-bottom:30px;" enctype="multipart/form-data">
								<div class="col-xl-12 col-md-12">
									<div class="section-headline margin-top-25 margin-bottom-12">
										<h5>ID Invoice</h5>
									</div>
									<input class="with-border" name="id_invoices" value="<?= ($id_invoice != 0 ? $id_invoice:'') ?>">
								</div>
								<div class="col-xl-12 col-md-12">
									<div class="section-headline margin-top-25 margin-bottom-12">
										<h5>Jumlah yang di Transfer</h5>
									</div>
									<input class="with-border" name="jumlah">
								</div>
								<div class="col-xl-12 col-md-12">
								<div class="uploadButton margin-top-30 margin-bottom-30">
											<input class="uploadButton-input" name="bukti_trf" type="file" accept="image/*, application/pdf" id="upload" multiple="">
											<label class="uploadButton-button ripple-effect" for="upload">Upload Bukti Transfer</label>
											<span class="uploadButton-file-name">Foto bukti transfer anda</span>
										</div>
								</div>
								<div class="col-xl-6 col-md-6">
									<button class="button ripple-effect" type="submit">Konfirmasi Pesanan</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-20">
				<div class="small-footer-copyrights">
					© 2018 <strong>Siporu</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->
<?php $this->load->view("__partials/footer.php") ?>