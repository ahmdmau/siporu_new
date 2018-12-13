<?php $this->load->view("admin/bagian/header.php") ?>

  <body id="page-top">

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
            <li class="breadcrumb-item active">Berita</li>
          </ol>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Daftar Berita</div>
            <div class="card-body">

            <?php if ($this->session->flashdata('error_update')): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $this->session->flashdata('error_update'); ?>
            </div>
            <?php endif ?>

            <?php if ($this->session->flashdata('tambah_berita_success')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('tambah_berita_success'); ?>
            </div>
            <?php endif ?>

            <?php if ($this->session->flashdata('success_hapus')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success_hapus'); ?>
            </div>
            <?php endif ?>

            <?php if ($this->session->flashdata('success_update')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success_update'); ?>
            </div>
            <?php endif ?>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <a href="<?= base_url('admin/tambah_berita')?>" class="btn btn-primary" style="float: right;">Tambah Berita</a>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Berita</th>
                      <th>Isi berita</th>
                      <th>Tanggal</th>
                      <th>Kategori</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      $no = 0; 
                      foreach($berita as $b) {
                        $no++; 
                      ?>
                  <tr>
                      
                      <td><?= $no ?></td>
                      <td width="200px;"><?= $b->judul_berita ?></td>
                      <td width="180px;"><?= substr($b->isi_berita, 0, 150) ?></td>
                      <td><?= $b->tanggal_berita ?></td>
                      <td><?= $b->kategori ?></td>
                      <td align="center">
                        <img width="180px" src="<?= base_url('upload/berita/' . $b->gambar) ?>" alt="">
                      </td>
                      <td>
                        <a class="btn btn-primary" href="<?= base_url('admin/editberita/' . $b->id_berita)?>">Edit</a>
                        <a class="btn btn-danger" href="<?= base_url('admin/hapusberita/' . $b->id_berita)?>" onclick="return confirm('apakah anda yakin?')">Hapus</a>
                      </td>
                     
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
        <?php $this->load->view("admin/bagian/footer.php") ?>