<?php $this->load->view("user_ukm/_partials/header.php") ?>
        <body class="bg-white">
        <!-- Begin Preloader -->
        <!-- <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div> -->
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 col-12 no-padding">
                    <div class="elisyam-bg background-03 h-100">
                        <div class="elisyam-overlay overlay-08"></div>
                        <div class="authentication-col-content-2 mx-auto text-center">
                            <div class="logo-centered">
                                <a href="<?= base_url() ?>">
                                    <img src="<?php echo base_url('assets/user/images/white.png') ?>" alt="logo">
                                </a>
                            </div>
                            <h2 style="color:white">Selamat Datang di Sistem Informasi Portal Ukm</h2>
                            <span class="description">
                                Daftarkan ukm anda untuk memperluas jangkauan bisnis anda! 
                            </span>
                            <ul class="login-nav nav nav-tabs mt-5 justify-content-center" role="tablist" id="animate-tab">
                                <li><a class="active" data-toggle="tab" href="#singin" role="tab" id="singin-tab" data-easein="zoomInUp">Masuk</a></li>
                                <li><a data-toggle="tab" href="#signup" role="tab" id="signup-tab" data-easein="zoomInRight">Daftar</a></li>
                            </ul>

                            <a href="<?= base_url(); ?>" style="color:white;margin-top:50px;">Kembali ke Situs Utama</a>
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form-2 mr-5 ml-5 w-auto">
                        <div class="tab-content" id="animate-tab-content">
                            <!-- Begin Sign In -->
                            <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                                <?php if ($this->session->flashdata('msg')): ?>
                                <div class="alert alert-success alert-dissmissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                    <?php echo $this->session->flashdata('msg'); ?>
                                </div>
                            <?php endif; ?>
                             <?php if ($this->session->flashdata('msg_error')): ?>
                                <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                    <?php echo $this->session->flashdata('msg_error'); ?>
                                </div>
                            <?php endif; ?>
                                <?php echo validation_errors(); ?>

                                <h3>Masuk ke Siporu</h3>
                                <form action="<?= base_url('user_ukm/user/login') ?>" method="post">
                                    <div class="group material-input">
                                        <input type="text" name="username" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Username</label>
                                    </div>
                                    <div class="group material-input">
                                        <input type="password" name="password" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Password</label>
                                    </div>
                                <div class="sign-btn text-center">
                                    <input type="submit" class="btn btn-lg btn-gradient-01" value="masuk">
                                </div>
                            </form>
                            </div>
                            <!-- End Sign In -->
                            <!-- Begin Sign Up -->
                            <div role="tabpanel" class="tab-pane" id="signup" aria-labelledby="signup-tab">
                                <?php echo validation_errors(); ?>
                                <div class="col-xl-12">
                                <!-- Form -->
                                <div class="widget mt-5">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h2>Daftar Ukm</h2>
                                    </div>
                                    <form method="POST" action="<?php echo base_url() . 'user_ukm/user/register' ?>" enctype="multipart/form-data">

                                    <div class="widget-body">
                                        <div class="row flex-row justify-content-center">
                                            <div class="col-xl-10">
                                                <div id="rootwizard">
                                                    <div class="step-container">
                                                        <div class="step-wizard">
                                                            <div class="progress">
                                                                <div class="progressbar"></div>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <a href="#tab1" data-toggle="tab">
                                                                        <span class="step">1</span>
                                                                        <span class="title">Step 1</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab2" data-toggle="tab">
                                                                        <span class="step">2</span>
                                                                        <span class="title">Step 2</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="tab1">
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Informasi UKM</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">Nama Ukm<span class="text-danger ml-2">*</span></label>
                                                                    <input type="text" name="nama_ukm" class="form-control" placeholder="Nama ukm" required>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label class="form-control-label">Nama Pemilik<span class="text-danger ml-2">*</span></label>
                                                                    <input type="text" name="nama_pemilik" class="form-control" placeholder="Nama pemilik" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">No Telepon<span class="text-danger ml-2">*</span></label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon addon-secondary">
                                                                            <i class="la la-phone"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" name="no_telp" placeholder="No Telepon" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label class="form-control-label">Email<span class="text-danger ml-2">*</span></label>
                                                                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">Username<span class="text-danger ml-2">*</span></label>
                                                                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label class="form-control-label">Password<span class="text-danger ml-2">*</span></label>
                                                                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                                                                </div>
                                                            </div>

                                                            <ul class="pager wizard text-right">
                                                                <li class="previous d-inline-block">
                                                                    <a href="javascript:;" class="btn btn-secondary ripple">Previous</a>
                                                                </li>
                                                                <li class="next d-inline-block">
                                                                    <a href="javascript:;" class="btn btn-gradient-01">Next</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane" id="tab2">
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Detail Ukm</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-12">
                                                                    <label class="form-control-label">Deskripsi Ukm<span class="text-danger ml-2">*</span></label>
                                                                    <textarea class="form-control" name="deskripsi_ukm" placeholder="Deskripsi ukm" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-12">
                                                                    <label class="form-control-label">Alamat</label>
                                                                    <textarea class="form-control" name="alamat" placeholder="Alamat ukm" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-4 mb-3">
                                                                    <label class="form-control-label">Kota<span class="text-danger ml-2">*</span></label>
                                                                    <input type="kota" name="kota" placeholder="kota" class="form-control" required>
                                                                    
                                                                </div>
                                                                <div class="col-xl-4 mb-3">
                                                                    <label class="form-control-label">Website</label>
                                                                    <input type="website" name="website" placeholder="website" class="form-control" required>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <label class="form-control-label">Instagram</label>
                                                                    <input type="text" name="instagram" placeholder="Instagram.." class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-4 mb-3">
                                                                    <label class="form-control-label">Gambar<span class="text-danger ml-2">*</span></label>
                                                                    <input type="file" name="gambar" class="form-control">
                                                                </div>
                                                                <div class="col-xl-4 mb-3">
                                                                    <label class="form-control-label">Jam Buka<span class="text-danger ml-2">*</span></label>
                                                                    <input type="time" name="jam_buka" class="form-control">
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <label class="form-control-label">Jam Tutup<span class="text-danger ml-2">*</span></label>
                                                                    <input type="time" name="jam_tutup" class="form-control">
                                                                </div>
                                                            </div>
                                                            <a href="javascript:;" class="btn btn-secondary ripple">Previous</a>
                                                            <input type="submit" value="Simpan" class="btn btn-gradient-01">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                </div>
                                <!-- End Form -->
                            </div>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
        </div>
        <?php $this->load->view("user_ukm/_partials/footer.php") ?>
        