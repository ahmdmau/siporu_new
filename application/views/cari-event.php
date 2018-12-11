<?php $this->load->view("__partials/header.php") ?>

<!-- Content
================================================== -->

<div id="titlebar" class="gradient margin-bottom-30">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo ucfirst($this->uri->segment(1)) ?></h2>
				<span><?php echo ucfirst($this->uri->segment(1)) ?></span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="<?php echo base_url() ?>">Beranda</a></li>
						<li><a href="<?php echo base_url() . ucfirst($this->uri->segment(1)) ?> "><?php echo ucfirst($this->uri->segment(1)) ?></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Section -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8">

				<!-- Section Headline -->
				<div class="section-headline margin-top-60 margin-bottom-35">
				</div>
				<?php if($query == false) { ?>
				<h3 align="center">Data yang anda cari tidak ditemukan!</h3>
				<?php } else { ?>
				<!-- Blog Post -->
				<?php foreach ($query as $event) { ?>
				<a href="<?php echo base_url()  . 'event/read/' . $event->slug ?>" class="blog-post">
					<!-- Blog Post Thumbnail -->
					<div class="blog-post-thumbnail">
						<div class="blog-post-thumbnail-inner">
							<img src="<?php echo base_url('upload/event/'.$event->gambar) ?>" alt="">
						</div>
					</div>
					<!-- Blog Post Content -->
					<div class="blog-post-content">
						<span class="blog-post-date"><?php echo $event->tanggal_event ?></span>
						<h3><?php echo $event->nama_event ?></h3>
						<p><?php echo substr($event->deskripsi, 0, 125) . '...' ?> </p>
					</div>
					<!-- Icon -->
					<div class="entry-icon"></div>
				</a>
				<?php } } ?>
				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<!-- Pagination -->
						<div class="pagination-container margin-top-10 margin-bottom-20">
							<nav class="pagination">
								<?php echo $pagination; ?>

							</nav>
						</div>
					</div>
				</div>
				<!-- Pagination / End -->

			</div>


			<div class="col-xl-4 col-lg-4 content-left-offset">
				<div class="sidebar-container margin-top-65">
					
					<!-- Location -->
					<div class="sidebar-widget margin-bottom-40">
					<form action="<?= base_url('event/cari') ?>" method="GET">
						<div class="input-with-icon">
							<input name="query" type="text" placeholder="Cari event" required>
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

	<!-- Spacer -->
	<div class="padding-top-40"></div>
	<!-- Spacer -->

</div>
<!-- Section / End -->


<?php $this->load->view("__partials/footer.php") ?>