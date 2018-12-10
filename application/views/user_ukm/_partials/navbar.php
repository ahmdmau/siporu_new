<div class="default-sidebar">
	<!-- Begin Side Navbar -->
	<nav class="side-navbar box-scroll sidebar-scroll">
		<!-- Begin Main Navigation -->
		<ul class="list-unstyled">
			<li class="active"><a href="<?php echo site_url('user_ukm/ukm') ?>"><i class="la la-spinner"></i><span>Dashboard</span></a></li>

			<li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-cart-arrow-down"></i><span>Produk</span></a>
				<ul id="dropdown-app" class="collapse list-unstyled pt-0">
					<li><a href="<?php echo base_url('user_ukm/produk/') ?>">Lihat Produk</a></li>
					<li><a href="<?php echo base_url('user_ukm/produk/tambah_produk') ?>">Tambah Produk</a></li>
				</ul>
			</li>
			<li><a href="#dropdown-ui"><i class="la la-user"></i><span>Tenaga Kerja</span></a>
			<li><a href="<?= base_url('user_ukm/invoices') ?>"><i class="la la-shopping-cart"></i><span>Pesanan</span></a>

			</li>
			<li><a href="<?= base_url('user_ukm/pengaturan') ?>"><i class="la la-gear"></i><span>Pengaturan</span></a></li>
		</ul>
	</nav>
</div>