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
            Edit Berita</div>
            <div class="card-body">
            <?php if ($this->session->flashdata('msg')): ?>
								<p><?php echo $this->session->flashdata('msg'); ?></p>
							<?php endif; ?>
              <form method="post" action="<?= base_url('admin/update_berita') ?>" enctype='multipart/form-data'>
                <?php foreach ($berita as $b) { ?>
                  <input type="hidden" name="id_berita" value="<?php echo $b->id_berita ?>">
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" name="judul_berita" value="<?= $b->judul_berita ?>" required="required">
                    <label for="lastName">Judul Berita</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <?php echo $this->ckeditor->editor("isi_berita", $b->isi_berita ); ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="text" id="kategoriBerita" class="form-control"  name="kategori" value="<?= $b->kategori ?>" placeholder="Kategori Berita" required="required">
                        <label for="kategoriBerita">Kategori Berita</label>
                      </div>
                    </div>
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
