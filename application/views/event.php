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

				<!-- Blog Post -->
				<?php foreach ($event as $event) { ?>
				<a href="<?php echo base_url()  . 'event/' . $event->slug ?>" class="blog-post">
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
				<?php } ?>
				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<!-- Pagination -->
						<div class="pagination-container margin-top-10 margin-bottom-20">
							<nav class="pagination">
								<ul>
									<li><a href="#" class="current-page ripple-effect">1</a></li>
									<li><a href="#" class="ripple-effect">2</a></li>
									<li><a href="#" class="ripple-effect">3</a></li>
									<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
								</ul>
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
						<div class="input-with-icon">
							<input id="autocomplete-input" type="text" placeholder="Search">
							<i class="icon-material-outline-search"></i>
						</div>
					</div>

					<!-- Widget -->
					<div class="sidebar-widget">

						<h3>Trending Posts</h3>
						<ul class="widget-tabs">

							<!-- Post #1 -->
							<li>
								<a href="pages-blog-post.html" class="widget-content active">
									<img src="images/blog-02a.jpg" alt="">
									<div class="widget-text">
										<h5>How to "Woo" a Recruiter and Land Your Dream Job</h5>
										<span>29 June 2018</span>
									</div>
								</a>
							</li>

							<!-- Post #2 -->
							<li>
								<a href="pages-blog-post.html" class="widget-content">
									<img src="images/blog-07a.jpg" alt="">
									<div class="widget-text">
										<h5>What It Really Takes to Make $100k Before You Turn 30</h5>
										<span>3 June 2018</span>
									</div>
								</a>
							</li>
							<!-- Post #3 -->
							<li>
								<a href="pages-blog-post.html" class="widget-content">
									<img src="images/blog-04a.jpg" alt="">
									<div class="widget-text">
										<h5>5 Myths That Prevent Job Seekers from Overcoming Failure</h5>
										<span>5 June 2018</span>
									</div>
								</a>
							</li>
						</ul>

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