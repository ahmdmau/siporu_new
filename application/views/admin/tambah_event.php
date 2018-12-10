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
            Tambah Event</div>
            <div class="card-body">
              <form method="post" action="<?= base_url('admin/admin/aksi_event')?>" enctype='multipart/form-data'>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Nama Event" name="nama_event" required="required">
                    <label for="lastName">Nama Event</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                  <?php echo $this->ckeditor->editor("deskripsi","Deskripsi Event"); ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="file" name="gambar" required="required">
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </form>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
        <?php $this->load->view("admin/bagian/footer.php") ?>