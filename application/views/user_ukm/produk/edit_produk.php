<?php $this->load->view("user_ukm/_partials/header.php") ?>
        <?php $this->load->view("user_ukm/_partials/top.php") ?>

        
            <div class="page-content d-flex align-items-stretch">
                <?php $this->load->view("user_ukm/_partials/navbar.php") ?>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Edit Produk</h2>
	                                
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

                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Edit Produk</h4>
                                    </div>
                                    <div class="widget-body">
                                        <?php foreach ($produk as $p) : ?>
                                        <form class="needs-validation" action="<?php echo base_url(). 'user_ukm/produk/update'?>" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id_produk" value="<?php echo $p->id_produk ?>">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Kategori *</label>
                                                <div class="col-lg-5">
                                                    <div class="select">
                                                        <select name="id_kategori" class="custom-select form-control" required>
                                                            <option value="">Pilih Kategori</option>
                                                            <?php foreach ($kategori as $k) : ?>
                                                            <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select an option
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Teknologi *</label>
                                                    <div class="col-lg-5">
                                                        <div class="select">
                                                            <select name="id_teknologi" class="custom-select form-control" required>
                                                            <option value="">Pilih Teknologi</option>
                                                             <?php foreach ($teknologi as $teknologi) : ?>
                                                                <option value="<?php echo $teknologi->id_teknologi; ?>"><?php echo $teknologi->nama; ?></option>
                                                            <?php endforeach; ?>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select an option
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Komoditas *</label>
                                                    <div class="col-lg-5">
                                                        <div class="select">
                                                            <select name="id_komoditas" class="custom-select form-control" required>
                                                            <option value="">Pilih Komoditas</option>
                                                             <?php foreach ($komoditas as $komoditas) : ?>
                                                                <option value="<?php echo $komoditas->id_komoditas; ?>"><?php echo $komoditas->nama_komoditas; ?></option>
                                                            <?php endforeach; ?>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select an option
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Bahan Baku *</label>
                                                    <div class="col-lg-5">
                                                        <div class="select">
                                                            <select name="id_bbaku" class="custom-select form-control" required>
                                                            <option value="">Pilih Bahan Baku</option>
                                                             <?php foreach ($bbaku as $bbaku) : ?>
                                                                <option value="<?php echo $bbaku->id_bbaku; ?>"><?php echo $bbaku->bb_nama; ?></option>
                                                            <?php endforeach; ?>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select an option
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nama Produk</label>
                                                <div class="col-lg-5">
                                                    <input type="text" name="nama_produk" class="form-control" placeholder="Nama produk" value="<?php echo $p->nama_produk ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Harga</label>
                                                    <div class="col-lg-5">
                                                        <input type="text" name="harga" class="form-control" placeholder="Harga" value="<?php echo $p->harga ?>" required>
                                                    </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Stok</label>
                                                    <div class="col-lg-5">
                                                        <input type="text" name="stok" class="form-control" placeholder="Stok" value="<?php echo $p->stok ?>" required>
                                                    </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Deskripsi Produk</label>
                                                    <div class="col-lg-5">
                                                        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi produk..." required><?php echo $p->deskripsi ?></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter a custom message
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Gambar</label>
                                                    <div class="col-lg-5">
                                                        <input type="file" class="form-control" name="gambar">
                                                    </div>
                                                </div>
                                           <input type="hidden" name="old_image" value="<?php echo $image_o ?>">
                                            <div class="text-right">
                                                <input class="btn btn-gradient-01" type="submit" value="simpan">
                                                <button class="btn btn-shadow" type="reset">Reset</button>
                                            </div>
                                        </form>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    <footer class="main-footer">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <p class="text-gradient-02">Siporu</p>
                            </div>
                        </div>
                    </footer>
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <?php $this->load->view("user_ukm/_partials/footer.php") ?>
        