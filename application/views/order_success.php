<?php $this->load->view("__partials/header.php") ?>

<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-job.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-details">
							<h3>Order Sukses</h3>
						</div>
					</div>

					<div class="right-side">
						<nav id="breadcrumbs" class="dark">
							<ul>
								<li><a href="<?php echo base_url() ?>">Beranda</a></li>
								<li>Order</li>
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
		<div class="col-xl-12 col-lg-12 margin-bottom-30">
			
		<?php if ($this->session->flashdata('berhasil_checkout')): ?>
							<div class="notification success">
								<p><?php echo $this->session->flashdata('berhasil_checkout'); ?></p>
								<a class="close"></a>
							</div>
							<?php endif; ?>

		</div>
		

	</div>
</div>

<!-- Spacer -->
<div class="margin-top-100 margin-bottom-25"></div>
<!-- Spacer / End-->
<?php $this->load->view("__partials/footer.php") ?>
