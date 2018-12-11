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
							<h3>Keranjang Belanja</h3>
						</div>
					</div>

					<div class="right-side">
						<nav id="breadcrumbs" class="dark">
							<ul>
								<li><a href="<?php echo base_url() ?>">Beranda</a></li>
								<li>Keranjang</li>
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
			
			<div class="section-headline margin-bottom-30">
				<h4>Table</h4>
			</div>
			<table class="basic-table">

				<tbody>
					<tr>
						<th>No</th>
						<th>Nama Produk</th>
						<th>Kuantitas</th>
						<th>Harga</th>
						<th>Subtotal</th>
					</tr>
					<?php
						$i=0;
						foreach ($this->cart->contents() as $items) :
						$i++;
					?>
					<tr>
						<td data-label="No"><?= $i ?></td>
						<td data-label="Nama Produk"><?= $items['name'] ?></td>
						<td data-label="Kuantitas"><?= $items['qty'] ?></td>
						<td align="right" data-label="Harga">Rp. <?= number_format($items['price'],0,',','.') ?></td>
						<td align="right" data-label="Subtotal">Rp. <?= number_format($items['subtotal'],0,',','.') ?></td>
					</tr>

					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<td align="right" data-label="Total" colspan="4"><strong>Total</strong></td>
						<td align="right"><strong>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></strong></td>
					</tr>
				</tfoot>
			</table>

			<div class="clearfix"></div>

			<div align="center" class="margin-top-30">
				<a href="<?= base_url('user/hapus_keranjang') ?>" class="button" style="background-color:#dc3545">Hapus keranjang</a>
				<a href="<?= base_url() ?>" class="button dark ripple-effect">Lanjutkan belanja</a>
				<a href="<?= base_url('order')?>" class="button ripple-effect">Checkout</a>
			</div>

		</div>
		

	</div>
</div>

<!-- Spacer -->
<div class="margin-top-100 margin-bottom-25"></div>
<!-- Spacer / End-->
<?php $this->load->view("__partials/footer.php") ?>
