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
            <li class="breadcrumb-item active">User Ukm</li>
          </ol>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data User Ukm</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Ukm</th>
                      <th>Nama Pemilik</th>
                      <th>Alamat</th>
                      <th>No Telepon</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 0; 
                      foreach ($userukm as $ukm) :
                        $no++; 
                    ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $ukm->nama_ukm ?></td>
                      <td><?= $ukm->nama_pemilik ?></td>
                      <td><?= $ukm->alamat ?></td>
                      <td><?= $ukm->no_telp ?></td>
                      <td><?= $ukm->email ?>5</td>
                      <td><?php if ($ukm->status == 0) {
                        echo "Tidak Aktif";
                      } else{
                        echo "Aktif";
                      } ?></td>
                      <td>
                      <?php if ($ukm->status == 0) { ?>
                        <a class="btn btn-primary btn-block" href="<?= base_url('admin/aktivasi/' . $ukm->id_ukm) ?>">Aktivasi</a>
                      <?php } else{ ?>
                        <span>-</span>

                      <?php } ?>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        <!-- /.container-fluid -->
        <?php $this->load->view("admin/bagian/footer.php") ?>
