<?php $this->load->view("__partials/header.php") ?>

<!-- Content
================================================== -->
<?php foreach ($event as $t) { ?>
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo ucfirst($this->uri->segment(1)) ?></h2>
				<span><?php echo $t->nama_event ?></span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="<?php echo base_url() ?>">Beranda</a></li>
						<li><a href="<?php echo base_url() . ucfirst($this->uri->segment(1)) ?> "><?php echo ucfirst($this->uri->segment(1)) ?></a></li>
						<li><?php echo $t->nama_event ?></li>
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
						<img src="<?php echo base_url('upload/event/'.$t->gambar) ?>" alt="">
					</div>
				</div>

				<!-- Blog Post Content -->
				<div class="blog-post-content">
					<h3 class="margin-bottom-10"><?php echo $t->nama_event ?></h3>

					<div class="blog-post-info-list margin-bottom-20">
						<a href="#" class="blog-post-info"><?php echo $t->tanggal_event ?></a>
						<!-- <a href="#"  class="blog-post-info">5 Comments</a> -->
					</div>

					<?php echo $t->deskripsi ?>

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
		<!-- Inner Content / End -->


		<div class="col-xl-4 col-lg-4 content-left-offset">
			<div class="sidebar-container">
				
				<!-- Location -->
				<div class="sidebar-widget margin-bottom-40">
					<div class="input-with-icon">
						<input id="autocomplete-input" type="text" placeholder="Search">
						<i class="icon-material-outline-search"></i>
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
