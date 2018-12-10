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
            Edit Event</div>
            <div class="card-body">
            <?php if ($this->session->flashdata('msg')): ?>
								<p><?php echo $this->session->flashdata('msg'); ?></p>
							<?php endif; ?>
              <form method="post" action="<?= base_url('admin/admin/update_event') ?>" enctype='multipart/form-data'>
                <?php foreach ($event as $e) { ?>
                  <input type="hidden" name="id_event" value="<?php echo $e->id_event ?>">
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" name="nama_event" value="<?= $e->nama_event ?>" required="required">
                    <label for="lastName">Nama Event</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <?php echo $this->ckeditor->editor("deskripsi", $e->deskripsi ); ?>
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
                <?php } ?>
                <button tpe="submit" class="btn btn-primary">Tambah Berita</button>
              </form>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <?php $this->load->view("admin/bagian/footer.php") ?>
