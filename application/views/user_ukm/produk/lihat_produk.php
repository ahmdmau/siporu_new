<!-- Header -->
<?php $this->load->view("user_ukm/_partials/header.php") ?>
        <?php $this->load->view("user_ukm/_partials/top.php") ?>

<!-- end header -->

            <div class="page-content d-flex align-items-stretch">
                <!-- navbar -->
                <?php $this->load->view("user_ukm/_partials/navbar.php") ?>
                <!-- end navbar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Daftar Produk Anda</h2>
	                                <div class="page-header-tools">
                                        
                                    </div>
	                            </div>
                            </div>
                        </div>
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($this->session->flashdata('hapus_produk')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('hapus_produk'); ?>
                                </div>
                            <?php endif; ?>
                                <!-- Begin Widget 07 -->
                                <div class="widget widget-07 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Daftar Produk</h2>
                                        <div class="widget-options">
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-gradient-01" href="<?php echo base_url('user_ukm/produk/tambah_produk') ?>">Tambah Produk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                                            <?php if (sizeof($produk) <= 0) { ?>
                                                <h2 class="mt-5 mb-5"><center> Tidak ada Data </center></h2>
                                            <?php } else { ?>
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Produk</th>
                                                        <th>Deskripsi</th>
                                                        <th>Harga</th>
                                                        <th>Gambar</th>
                                                        <th>Stok</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($produk as $p) : ?>
                                                    <tr>
                                                        <td><?php echo $p->nama_produk; ?></td>
                                                        <td><?php echo substr($p->deskripsi, 0, 50) . '...'; ?></td>
                                                        <td><?php echo $p->harga; ?></td>
                                                        <td><img src="<?php echo base_url('upload/produk/'.$p->gambar) ?>" width="64" /></td>
                                                        <td><?php echo $p->stok; ?></td>
                                                        <td class="td-actions">
                                                            <a href="<?php echo site_url('user_ukm/produk/edit/'. $p->id_produk) ?>">
                                                                <i class="la la-edit edit"></i>
                                                            </a>
                                                            <a href="" id="hapusData" data-toggle="modal" data-target="#modal-centered" onclick="confirm('<?php echo site_url('user_ukm/produk/hapus/'.$p->id_produk);?>')",'Title');"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                            <?php } ?>
                                        </div>
                                    </div>
                                    <!-- Pagination -->
                                    <!-- <div class="widget-footer d-flex align-items-center">
                                        <div class="mr-auto p-2">
                                            <span class="display-items">Showing 1-30 / 150 Results</span>
                                        </div>
                                        <div class="p-2">
                                            <nav aria-label="...">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i class="ion-chevron-left"></i></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active">
                                                        <span class="page-link">2<span class="sr-only">(current)</span></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
 -->                                    <!-- End Widget Footer -->
                                </div>
                                <!-- End Widget 07 -->
                            </div>
                        </div>
                    </div>

                    <footer class="main-footer">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <p class="text-gradient-02">Siporu</p>
                            </div>
                        </div>
                    </footer>
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                </div>
            </div>
        </div>
       

       <div id="modal-centered" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hapus Data</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Apakan Anda yakin akan menghapus produk?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                        <a class="btn btn-primary" id="btn-delete" href="">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("user_ukm/_partials/footer.php") ?>
