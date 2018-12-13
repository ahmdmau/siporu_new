<?php
if (isset($this->session->userdata['login_ukm'])) {
    $username = ($this->session->userdata['login_ukm']['username']);
    $email = ($this->session->userdata['login_ukm']['email']);
    $id_ukm = ($this->session->userdata['login_ukm']['id_ukm']);
    $gambar = ($this->session->userdata['login_ukm']['gambar']);
}

?>

<body id="page-top"
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="<?= base_url('user_ukm') ?>" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="<?php echo base_url('assets/user/images/logo.png') ?>" alt="logo" class="logo-big">
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="<?php echo base_url('assets/user/images/logo.png') ?>" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                        <!-- End Logo -->
                        <!-- Begin Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                            
                            <li class="nav-item d-flex align-items-center">
                                Selamat Datang, <?php echo $username; ?>
                            </li>
                            <!-- Search -->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#"></a></li>
                            
                            <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="<?= base_url('upload/ukm/' . $gambar)?>" alt="..." class="avatar rounded-circle"></a>
                                <ul aria-labelledby="user" class="user-size dropdown-menu">
                                    <li class="welcome">
                                        <a href="<?= base_url("user_ukm/pengaturan") ?>" class="edit-profil"><i class="la la-gear"></i></a>
                                        <img src="<?= base_url('upload/ukm/' . $gambar)?>" alt="..." class="rounded-circle">
                                    </li>
                                    <li><a rel="nofollow" href="<?php echo base_url('user_ukm/user/logout') ?>" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                                </ul>
                            </li>
                            <!-- End User -->
                            <!-- Begin Quick Actions -->
                            <!-- End Quick Actions -->
                        </ul>
                        <!-- End Navbar Menu -->
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>