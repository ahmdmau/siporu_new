<?php $this->load->view("__partials/header.php") ?>
<!-- Header Container / End -->
<div id="titlebar" class="gradient">
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
<!-- Spacer -->
<div class="margin-top-90"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="sidebar-container">
				<form action="ukm/cari" method="post">
				<div class="sidebar-widget">
					<h3>Cari</h3>
					<div class="keywords-container">
						<div class="keyword-input-container">
							<input type="text" name="nama_ukm" class="keyword-input" placeholder="contoh : ukm mochi"/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- Location -->
				<div class="sidebar-widget">
					<h3>Lokasi</h3>
					<div class="input-with-icon">
						<div>
							<input type="text" name="kota" placeholder="Lokasi">
						</div>
						<i class="icon-material-outline-location-on"></i>
					</div>
				</div>
				<div class="sidebar-widget">
					<input type="submit" class="button ripple-effect" value="Cari">
				</div>
				</form>
				<!-- Category -->
				<!-- <div class="sidebar-widget">
					<h3>Kategori</h3>
					<select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="Semua Kategori" >
						<option>Admin Support</option>
						<option>Customer Service</option>
						<option>Data Analytics</option>
						<option>Design & Creative</option>
						<option>Legal</option>
						<option>Software Developing</option>
						<option>IT & Networking</option>
						<option>Writing</option>
						<option>Translation</option>
						<option>Sales & Marketing</option>
					</select>
				</div> -->

				<!-- Keywords -->
				<div class="clearfix"></div>

			</div>
		</div>
		<div class="col-xl-9 col-lg-8 content-left-offset">

			
			<!-- Tasks Container -->
			<div class="tasks-list-container tasks-grid-layout margin-top-35">
				<?php foreach ($ukm as $u) { ?>
				
				<a href="<?php echo base_url()  . 'ukm/read/' . $u->slug ?>" class="task-listing">

					<!-- Job Listing Details -->
					<div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<img src="<?php echo base_url('upload/ukm/'.$u->gambar) ?>" alt="<?php echo $u->nama_ukm ?>">

							<h3 class="task-listing-title margin-top-25"><?php echo $u->nama_ukm ?></h3>
							<p><?php 
								$num_char = 150;
								echo substr($u->deskripsi_ukm, 0 , $num_char) . '...'?></p>
							<ul class="task-icons">
								<li><i class="icon-material-outline-location-on"></i> <?php echo $u->alamat ?></li>
							<li><i class="icon-material-outline-business-center"></i> <?php echo $u->jam_buka ?> - <?php echo $u->jam_tutup ?></li>
							</ul>
						</div>

					</div>
				</a>
				<?php } ?>				
			</div>
			<!-- Tasks Container / End -->


			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-60 margin-bottom-60">
						<nav class="pagination">
							<!-- <ul>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
								<li><a href="#" class="ripple-effect">1</a></li>
								<li><a href="#" class="current-page ripple-effect">2</a></li>
								<li><a href="#" class="ripple-effect">3</a></li>
								<li><a href="#" class="ripple-effect">4</a></li>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
							</ul> -->
							<?php echo $pagination; ?>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>
	</div>
</div>


<?php $this->load->view("__partials/footer.php") ?>
