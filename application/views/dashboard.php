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
					<span class="trigger-title">Navigasi</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Dashboard">
							<li class="active"><a href="<?= base_url('user/dashboard') ?>"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
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
							<li><a href="<?= base_url('user/setting') ?>"><i class="icon-material-outline-settings"></i> Settings</a></li>
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
				<h3>Selamat Datang, <?php echo $nama; ?></h3>
				<span>Kami senang melihat Anda lagi!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Dashboard</li>
					</ul>
				</nav>
			</div>
	
			<!-- Fun Facts Container -->
			<div class="fun-facts-container">
				<div class="fun-fact" data-fun-fact-color="#36bd78">
					<div class="fun-fact-text">
						<span>Transaksi</span>
						<?php if (sizeof($total) <= 0) { ?>
                            <h4>0</h4>
                        <?php } else { ?>
						<?php foreach($total as $t) { ?>
						<h4><?= $t->count ?></h4>
						<?php } } ?>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
				</div>

				<!-- Last one has to be hidden below 1600px, sorry :( -->
				<!-- <div class="fun-fact" data-fun-fact-color="#2a41e6">
					<div class="fun-fact-text">
						<span>This Month Views</span>
						<h4>987</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
				</div> -->
			</div>
			

			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">
						<div class="headline">
							<h3><i class="icon-material-outline-assignment"></i> Riwayat Transaksi</h3>
						</div>
						<div class="content">
						<?php if ($riwayat != false) : ?>
							<ul class="dashboard-box-list">
								<?php foreach ($riwayat as $h) { ?>
								<li>
									<div class="invoice-list-item">
									<strong><?= $h->nama_produk ?></strong>
										<ul>
											<?php if($h->status == 'unpaid') : ?>
											<li><span class="unpaid"><?= $h->status ?></span></li>
											<?php elseif($h->status == 'confirmed') : ?>
											<li><span class="unpaid" style="background-color:#49a8ce"><?= $h->status ?></span></li>
											<?php endif;?>
											<li>Id Order: <?= $h->id ?></li>
											<li>Due Date: <?= $h->due_date ?></li>
											<li><b>Total: <?= $h->total ?></b></li>
											<li>Date: 12/08/2018</li>
										</ul>
									</div>
									<!-- Buttons -->
									<?php if($h->status == 'unpaid') : ?>
									<div class="buttons-to-right">
										<a href="<?= base_url('user/konfirmasi_pesanan/') . $h->id ?>" class="button">Selesaikan Pembayaran</a>
										<a href="<?= base_url('user/batal_pesanan/') . $h->id ?>"  onclick="return confirm('apakah anda yakin?')"  class="button">Batal Pesanan</a>
									</div>
									<?php endif ?>
								</li>
								<?php } ?>
							</ul>
							<?php else : ?>
								<p align="center" style="padding:30px 0;" >Tidak ada data.</p>
								
							<?php endif; ?>
						</div>
					</div>
				</div>

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
