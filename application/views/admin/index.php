<?php $this->load->view("admin/bagian/header.php") ?>

  <body id="page-top">

   <!-- Top.php -->
    <?php $this->load->view("admin/bagian/top.php") ?>

    <div id="wrapper">

      <!-- Sidebar -->
    <?php $this->load->view("admin/bagian/navbar.php") ?>
      

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  <?php foreach($hitungUkm as $t) { ?>
                  <div class="mr-5"><?= $t->count ?> User Ukm</div>
						      <?php } ?>

                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= base_url('admin/user_ukm') ?>">
                  <span class="float-left">Lihat Detail</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-newspaper"></i>
                  </div>
                  <?php foreach($hitungBerita as $b) { ?>
                  <div class="mr-5"><?= $b->count ?> Berita</div>
						      <?php } ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= base_url('admin/berita') ?>">
                  <span class="float-left">Lihat Detail</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <?php foreach($hitungProduk as $p) { ?>
                  <div class="mr-5"><?= $t->count ?> Produk</div>
						      <?php } ?>

                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= base_url('admin/produk') ?>">
                  <span class="float-left">Lihat Detail</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <?php foreach($hitungEvent as $e) { ?>
                  <div class="mr-5"><?= $e->count ?> Event</div>
						      <?php } ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= base_url('admin/event') ?>">
                  <span class="float-left">Lihat Detail</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>


 

        </div>
        <!-- /.container-fluid -->
        <?php $this->load->view("admin/bagian/footer.php") ?>
