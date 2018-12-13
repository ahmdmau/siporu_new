<?php $this->load->view("__partials/header.php") ?>

<!-- Content
================================================== -->
<?php foreach ($test as $b) { ?>
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo ucfirst($this->uri->segment(1)) ?></h2>
				<span><?php echo $b->judul_berita ?></span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="<?php echo base_url() ?>">Beranda</a></li>
						<li><a href="<?php echo base_url() . ucfirst($this->uri->segment(1)) ?> "><?php echo ucfirst($this->uri->segment(1)) ?></a></li>
						<li><?php echo $b->judul_berita ?></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<!-- Post Content -->
<div class="container">
	<div class="row">
		
		<!-- Inner Content -->
		<div class="col-xl-8 col-lg-8">
			<!-- Blog Post -->

			<div class="blog-post single-post">

				<!-- Blog Post Thumbnail -->
				<div class="blog-post-thumbnail">
					<div class="blog-post-thumbnail-inner">
						<span class="blog-item-tag"><?php echo $b->kategori ?></span>
						<img src="<?php echo base_url('upload/berita/'.$b->gambar) ?>" alt="">
					</div>
				</div>

				<!-- Blog Post Content -->
				<div class="blog-post-content">
					<h3 class="margin-bottom-10"><?php echo $b->judul_berita ?></h3>

					<div class="blog-post-info-list margin-bottom-20">
						<a href="#" class="blog-post-info"><?php echo $b->tanggal_berita ?></a>
						<!-- <a href="#"  class="blog-post-info">5 Comments</a> -->
					</div>

					<?php echo $b->isi_berita ?>

				</div>

			</div>
			
		
		</div>
		<!-- Inner Content / End -->


		<div class="col-xl-4 col-lg-4 content-left-offset">
			<div class="sidebar-container">
				
				<!-- Location -->
				<div class="sidebar-widget margin-bottom-40">
				<form action="<?= base_url('berita/cari') ?>" method="GET">
						<div class="input-with-icon">
							<input name="query" type="text" placeholder="Cari berita">
							<i class="icon-material-outline-search"></i>
						</div>
						<div class="margin-top-10">
							<input type="submit" class="button ripple-effect" value="Cari">

						</div>
						</form>
					</div>
				</div>
				

			</div>
		</div>

	</div>
</div>

<?php } ?>

<!-- Spacer -->
<div class="padding-top-40"></div>
<!-- Spacer -->


<?php $this->load->view("__partials/footer.php") ?>
