<?php $this->load->view("__partials/header.php") ?>
<div class="intro-banner" data-background-image="<?php echo base_url('assets/user/images/home-bg.jpg') ?>">
	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Portal ukm terbesar di Indonesia.</strong>
						<br>
						<span><strong class="color">Siporu</strong> Portal Media Informasi, Info Peluang Usaha, Bisnis UKM Indonesia dan Direktori UKM Indonesia.</span>
					</h3>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">
					<form action="<?= base_url('siporu/cari')?>" method="POST">
					<div class="intro-search-field">
						<label for ="intro-keywords" class="field-title ripple-effect">Cari ukm anda?</label>
						<input id="intro-keywords" type="text" name="cari" style="width:300px;" placeholder="Cari ukm atau produk ukm...">
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" type="submit">Cari</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<?php foreach($hitungUkm as $t) { ?>
						<strong class="counter"><?= $t->count ?></strong>
						<?php } ?>
						<span>Ukm Terdaftar</span>
					</li>
					<li><?php foreach($hitungProduk as $hp) { ?>
						<strong class="counter"><?= $hp->count ?></strong>
						<?php } ?>
						<span>Produk Ukm</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>


<div class="section margin-top-65 margin-bottom-30">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Daftar Kategori Ukm</h3>
				</div>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-list-layout-1.html" class="photo-box small" data-background-image="<?php echo base_url('assets/user/images/cat-1.jpg') ?>">
					<div class="photo-box-content">
						<h3>Pertanian</h3>
						<span>612</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-list-layout-full-page-map.html" class="photo-box small" data-background-image="<?php echo base_url('assets/user/images/cat-2.jpg') ?>">
					<div class="photo-box-content">
						<h3>Perikanan</h3>
						<span>113</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-grid-layout-full-page.html" class="photo-box small" data-background-image="<?php echo base_url('assets/user/images/cat-3.jpg') ?>">
					<div class="photo-box-content">
						<h3>Peternakan</h3>
						<span>186</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-list-layout-2.html" class="photo-box small" data-background-image="<?php echo base_url('assets/user/images/cat-4.jpg') ?>">
					<div class="photo-box-content">
						<h3>Perkebunan</h3>
						<span>298</span>
					</div>
				</a>
			</div>

		</div>
	</div>
</div>


<!-- Features Jobs -->
<div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-35">
					<h3>Ukm terbaru</h3>
					<a href="jobs-list-layout-full-page-map.html" class="headline-link">Lihat semua ukm</a>
				</div>
				
				<!-- Jobs Container -->
				<div class="listings-container grid-layout margin-top-35">
                <?php foreach ($ukm as $ukm) { ?>				
				<a href="<?php echo base_url()  . 'ukm/read/' . $ukm->slug ?>" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						
						<img src="<?php echo base_url('upload/ukm/'.$ukm->gambar) ?>" alt="">

						<!-- Details -->
						<div class="job-listing-description margin-top-25">
							<h2 class="job-listing-title"><?php echo $ukm->nama_ukm; ?></h2>
							<p><?php echo substr($ukm->deskripsi_ukm, 0, 70) . '...' ?></p>
						</div>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<ul>
							<li><i class="icon-material-outline-location-on"></i> <?php echo $ukm->alamat ?></li>
							<li><i class="icon-material-outline-business-center"></i> <?php echo $ukm->jam_buka ?> - <?php echo $ukm->jam_tutup ?></li>
						</ul>
					</div>
				</a>
                <?php } ?>
				
				
				


				</div>

			</div>
		</div>
	</div>
</div>

<div class="section padding-top-65 padding-bottom-50">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-45">
					<h3>Berita terbaru</h3>
					<a href="pages-blog.html" class="headline-link">Lihat berita</a>
				</div>

				<div class="row">
					<!-- Blog Post Item -->
					<?php foreach ($berita as $b) { ?>
					<div class="col-xl-4 col-md-6">
						<a href="<?php echo base_url()  . 'berita/' . $b->slug ?>" class="blog-compact-item-container">
							<div class="blog-compact-item">
								<img src="<?php echo base_url('upload/berita/'.$b->gambar) ?>" alt="">
								<span class="blog-item-tag"><?php echo $b->kategori ?></span>
								<div class="blog-compact-item-content">
									<ul class="blog-post-tags">
										<li><?php echo $b->tanggal_berita ?></li>
									</ul>
									<h3><?php echo $b->judul_berita ?></h3>
									<p><?php echo substr($b->isi_berita, 0, 70) . '...' ?></p>
								</div>
							</div>
						</a>
					</div>
					<?php } ?>
					<!-- Blog post Item / End -->
				</div>


			</div>
		</div>
	</div>
</div>

<?php $this->load->view("__partials/footer.php") ?>
