<?php $this->load->view("__partials/header.php") ?>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Kontak</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Kontak</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<?php foreach ($kontak as $k) : ?>

<!-- Container -->
<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<h1 class="headline padding-bottom-50">Tentang Siporu</h1>
			<?= $k->tentang ?>
		</div>
		<div class="col-xl-12">
			<div class="contact-location-info margin-bottom-50">
				<div class="contact-address">
					<ul>
						<li class="contact-address-headline">Alamat</li>
						<li><?= $k->alamat ?></li>
						<li><?= $k->no_telp ?></li>
						<li><?= $k->email ?></li>
						<li>
							<div class="freelancer-socials">
								<ul>
									<li><a href="#" title="Dribbble" data-tippy-placement="top"><i class="icon-brand-dribbble"></i></a></li>
									<li><a href="#" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
									<li><a href="#" title="Behance" data-tippy-placement="top"><i class="icon-brand-behance"></i></a></li>
									<li><a href="#" title="GitHub" data-tippy-placement="top"><i class="icon-brand-github"></i></a></li>
								
								</ul>
							</div>
						</li>
					</ul>

				</div>
				<div id="single-job-map-container">
					<div id="singleListingMap" data-latitude="37.777842" data-longitude="-122.391805" data-map-icon="im im-icon-Hamburger"></div>
					<a href="#" id="streetView">Street View</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>
<?php $this->load->view("__partials/footer.php") ?>
