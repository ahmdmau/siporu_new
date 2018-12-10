
<?php $this->load->view("__partials/header.php") ?>


<!-- Titlebar
================================================== -->
<?php foreach ($detail as $d) { ?>
<div class="single-page-header" data-background-image="<?php echo base_url('assets/user/images/single-job.jpg') ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-details">
							<h3><?php echo $d->nama_ukm ?></h3>
						</div>
					</div>

					<div class="right-side">
						<nav id="breadcrumbs" class="dark">
							<ul>
							<li><a href="<?php echo base_url() ?>">Beranda</a></li>
							<li><a href="<?php echo base_url() . ucfirst($this->uri->segment(1)) ?> "><?php echo ucfirst($this->uri->segment(1)) ?></a></li>
							<li><?php echo $d->nama_ukm ?></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			<?php foreach ($detail as $d) { ?>

			<div class="single-page-section">
				<img src="<?php echo base_url('upload/ukm/'.$d->gambar) ?>" alt="">
				<h2 class="margin-bottom-25 margin-top-25"><?php echo $d->nama_ukm ?></h2>
				<?php echo $d->deskripsi_ukm ?>
			</div>

			<?php } ?>

			<!-- <div class="single-page-section">
				<h3 class="margin-bottom-30">Location</h3>
				<div id="single-job-map-container">
					<div id="singleListingMap" data-latitude="-6.5540783" data-longitude="106.7212857" data-map-icon="im im-icon-Hamburger"></div>
					<a href="#" id="streetView">Street View</a>
				</div>
			</div> -->

			<div class="single-page-section">
				<h3 class="margin-bottom-25">Produk dari ukm</h3>

				<!-- Listings Container -->
				<div class="listings-container grid-layout">

						<?php foreach($produk as $p) { ?>
						<a href="<?= base_url() . 'produk/' . $p->slug ?>" class="job-listing">

							<!-- Job Listing Details -->
							<div class="job-listing-details">
								<!-- Logo -->
								

								<!-- Details -->
								<div class="job-listing-description">
									<img src="<?= base_url('upload/produk/'. $p->gambar) ?>" alt="">
									<h4 class="job-listing-company margin-top-25">Mochi</h4>
									<h3 class="job-listing-title"><?= $p->nama_produk ?></h3>
									<p><?= $p->deskripsi ?></p>
								</div>
							</div>

							<!-- Job Listing Footer -->
							<div class="job-listing-footer">
								<ul>
									<li><i class="icon-material-outline-account-balance-wallet"></i> Rp. <?= $p->harga ?></li>
								</ul>
							</div>
						</a>

						<?php } ?>

					</div>
					<!-- Listings Container / End -->

				</div>
		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
				<!-- Sidebar Widget -->
				<?php foreach($detail as $d) { ?>
				<div class="sidebar-widget">
					<div class="job-overview">
						<div class="job-overview-headline">Informasi Ukm</div>
						<div class="job-overview-inner">
							<ul>
								<li>
									<i class="icon-feather-user"></i>
									<span>Nama Pemilik</span>
									<h5><?php echo $d->nama_pemilik ?></h5>
								</li>
								<li>
									<i class="icon-material-outline-location-on"></i>
									<span>Lokasi</span>
									<h5><?php echo $d->alamat ?></h5>
								</li>
								<li>
									<i class="icon-material-outline-access-time"></i>
									<span>Jam Buka</span>
									<h5><?php echo $d->jam_buka ?> WIB - <?php echo $d->jam_tutup ?> WIB</h5>
								</li>
								<li>
									<i class="icon-feather-phone"></i>
									<span>No Telepon</span>
									<h5><?php echo $d->no_telp ?></h5>
								</li>
								<li>
									<i class="icon-line-awesome-instagram"></i>
									<span>Instagram</span>
									<h5><?php echo $d->instagram ?> </h5>
								</li>
								<li>
									<i class="icon-material-outline-language"></i>
									<span>Website</span>
									<h5><?php echo $d->website  ?> </h5>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<?php } ?>


				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<h3>Share</h3>

					
					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Menarik? <strong>Share It!</strong></span>
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


<?php $this->load->view("__partials/footer.php") ?>
