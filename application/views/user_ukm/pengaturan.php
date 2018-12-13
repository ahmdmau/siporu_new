<?php $this->load->view("user_ukm/_partials/header.php") ?>
    <?php $this->load->view("user_ukm/_partials/top.php") ?>
            <div class="page-content d-flex align-items-stretch">
            <?php $this->load->view("user_ukm/_partials/navbar.php")?>
                
                <!-- End Left Sidebar -->
                <!-- Begin Content -->
                <div class="content-inner profile">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title">Profile</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Pengaturan Profil Ukm</h4>
                                    </div>
                                    <div class="widget-body">
                                    <?php if ($this->session->flashdata('update_ukm')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('update_ukm'); ?>
                                </div>
                            <?php endif; ?>
                                        <form class="form-horizontal" action="<?= site_url('user_ukm/pengaturan/aksi_setting') ?>" method="POST" enctype="multipart/form-data">
                                            <?php foreach($user as $u) : ?>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Nama Ukm</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="nama_ukm" class="form-control" value="<?= $u->nama_ukm ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Nama Pemilik</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="nama_pemilik" class="form-control" value="<?= $u->nama_pemilik ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Email</label>
                                                <div class="col-lg-6">
                                                    <input type="email" name="email" class="form-control" value="<?= $u->email ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Password</label>
                                                <div class="col-lg-6">
                                                    <input type="password" name="password" class="form-control" placeholder="www.website.com">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">No Telepon</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="no_telp" class="form-control" value="<?= $u->no_telp ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Username</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="username" class="form-control" value="<?= $u->username ?>">
                                                </div>
                                            </div>  
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Deskripsi Ukm</label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" name="deskripsi_ukm" placeholder="Deskripsi ukm" required=""><?= $u->deskripsi_ukm ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Alamat Ukm</label>
                                                <div class="col-lg-6">
                                                <textarea class="form-control" name="alamat" placeholder="Alamat ukm" required=""><?= $u->alamat ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Kota</label>
                                                <div class="col-lg-6">
                                                <input type="kota" name="kota" placeholder="kota" class="form-control" required="" value="<?= $u->kota ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Website</label>
                                                <div class="col-lg-6">
                                                    <input type="website" name="website" placeholder="website" class="form-control" required="" value="<?= $u->website ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Instagram</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="instagram" placeholder="Instagram.." value="<?= $u->instagram ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Gambar</label>
                                                <div class="col-lg-6">
                                                <input type="file" name="gambar" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Jam Buka</label>
                                                <div class="col-lg-6">
                                                <input type="time" name="jam_buka" class="form-control" value="<?= $u->jam_buka ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Jam Tutup</label>
                                                <div class="col-lg-6">
                                                <input type="time" name="jam_tutup" value="<?= $u->jam_tutup ?>" class="form-control">
                                                </div>
                                            </div>
                                        <div class="em-separator separator-dashed"></div>
                                        <div class="text-right">
                                            <button class="btn btn-gradient-01" type="submit">Save Changes</button>
                                            <button class="btn btn-shadow" type="reset">Cancel</button>
                                        </div>
                                        
                                        </form>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
        <?php $this->load->view("user_ukm/_partials/footer.php") ?>
                    