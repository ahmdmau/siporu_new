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
            <li class="breadcrumb-item active">Event</li>
          </ol>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Daftar Event</div>
            <div class="card-body">
            <?php if ($this->session->flashdata('tambah_event_success')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('tambah_event_success'); ?>
            </div>
            <?php endif ?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <a href="<?= base_url('admin/tambah_event') ?>" class="btn btn-primary" style="float: right;">Tambah Event</a>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Event</th>
                      <th>Deskripsi</th>
                      <th>Tanggal</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 0; 
                    foreach($event as $e) :
                    $no++ ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $e->nama_event ?></td>
                      <td><?= $e->deskripsi ?></td>
                      <td><?= $e->tanggal_event ?></td>
                      <td>
                        <img width="150px;" src="<?= base_url('upload/event/' . $e->gambar) ?>" alt="">
                      </td>
                      <td>
                        <a class="btn btn-primary" href="<?= base_url('admin/admin/editevent/' . $e->id_event) ?>">Edit</a>
                        <a class="btn btn-danger" href="<?= base_url('admin/admin/hapusevent/' . $e->id_event) ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
        <?php $this->load->view("admin/bagian/footer.php") ?>
