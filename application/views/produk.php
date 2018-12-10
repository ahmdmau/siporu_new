<?php $this->load->view("__partials/header.php") ?>

<!-- Titlebar
================================================== -->
<?php foreach($produk as $p) {?>
<div class="single-page-header" data-background-image="images/single-job.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-details">
							<h3><?= $p->nama_produk; ?></h3>
						</div>
					</div>

					<div class="right-side">
						<nav id="breadcrumbs" class="dark">
							<ul>
								<li><a href="<?php echo base_url() ?>">Beranda</a></li>
								<li><a href="<?php echo base_url() . ucfirst($this->uri->segment(1)) ?> "><?php echo ucfirst($this->uri->segment(1)) ?></a></li>
								<li><?php echo $p->nama_produk; ?></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Description -->
			<div class="single-page-section">
				<img src="<?= base_url('upload/produk/' . $p->gambar ) ?>" alt="">
				<h3 class="margin-bottom-25 margin-top-25"><?= $p->nama_produk; ?></h3>
				<?= $p->deskripsi; ?>
			</div>

			<div class="clearfix"></div>

		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
				<div class="sidebar-widget">
					<div class="job-overview">
						<div class="job-overview-headline">Informasi Produk</div>
						<div class="job-overview-inner">
							<ul>
								<li>
									<i class="icon-material-outline-account-balance-wallet"></i>
									<span>Harga</span>
									<h5>Rp. <?= $p->harga ?></h5>
								</li>
							</ul>
							<a href="<?php 
							if(isset($this->session->userdata['logged_in'])) {
								echo base_url('user/add_to_cart/') . $p->id_produk; 
							} else{
								echo base_url(); 
							}
							 ?>" class="button ripple-effect move-on-hover full-width margin-top-30" id="snackbar-place-bid">Beli</a>
						</div>
					</div>
				</div>

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Interesting? <strong>Share It!</strong></span>
							<ul class="share-buttons-icons">
								<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
								<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
								<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
								<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<?php  } ?>

<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->
<?php $this->load->view("__partials/footer.php") ?>
