<?php $this->load->view("__partials/header.php") ?>

<?php if (isset($this->session->userdata['logged_in'])) {
					$nama = ($this->session->userdata['logged_in']['nama_lengkap']);
					$email = ($this->session->userdata['logged_in']['email']);
					$id_pembeli = ($this->session->userdata['logged_in']['id_pembeli']);
}?>
<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
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
							<li><a href="<?= base_url('user/dashboard') ?>"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="<?= base_url('user/konfirmasi_pesanan') ?>"><i class="icon-material-outline-shopping-cart"></i> Konfirmasi Pesanan</a></li>
							<li><a href="<?= base_url('user/riwayat_pesanan') ?>"><i class="icon-material-outline-question-answer"></i> Riwayat Transaksi 
							<?php if (sizeof($total) <= 0) { ?>
                        	<?php } else { ?>
							<?php foreach($total as $t) { ?>
								<span class="nav-tag">
								<?= $t->count ?>
								</span>
							<?php } } ?>
								
							</a></li>
						</ul>
						<ul data-submenu-title="Account">
							<li  class="active"><a href="<?= base_url('user/setting') ?>"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="<?= base_url('user/logout') ?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
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
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li><a href="<?= base_url('user/dashboard') ?>">Dashboard</a></li>
						<li>Settings</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<form action="<?= base_url('user/aksi_setting') ?>" method="post" enctype="multipart/form-data">
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> Akun Saya</h3>
						</div>

						<?php if ($this->session->flashdata('new_pass_success')): ?>
							<div class="notification success closeable">
								<p><?php echo $this->session->flashdata('new_pass_success'); ?></p>
								<a class="close"></a>
							</div>
						<?php endif; ?>
						<?php if ($this->session->flashdata('error_form')): ?>
							<div class="notification success closeable">
								<p><?php echo $this->session->flashdata('error_form'); ?></p>
								<a class="close"></a>
							</div>
						<?php endif; ?>

						<div class="content with-padding padding-bottom-0">

							<div class="row">
								<?php foreach($user as $u) : ?>

								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" data-tippy="Ganti Foto" data-original-title="Change Avatar">
										<img class="profile-pic" src="<?= base_url('upload/user/' . $u->gambar) ?>" alt="">
										<div class="upload-button"></div>
										<input class="file-upload" type="file" name="gambar" accept="image/*">
									</div>
								</div>

								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>First Name</h5>
												<input type="text" class="with-border" name="nama_lengkap" value="<?= $u->nama_lengkap ?>">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input type="text" class="with-border" name="email" value="<?= $u->email ?>">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>No Telp</h5>
												<input type="text" class="with-border" name="no_telp" value="<?= $u->no_telp ?>">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Alamat</h5>
												<input type="text" class="with-border" name="alamat" value="<?= $u->alamat ?>">
											</div>
										</div>

									</div>
								</div>
								<?php endforeach; ?>
							</div>

						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				
				<!-- Dashboard Box -->
			
				
				<!-- Button -->
				<div class="col-xl-12">
					<button type="submit" class="button ripple-effect big margin-top-30">Simpan</button>
				</div>
				</form>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
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
