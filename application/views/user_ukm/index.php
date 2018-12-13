<?php $this->load->view("user_ukm/_partials/header.php") ?>
    <?php $this->load->view("user_ukm/_partials/top.php") ?>

            <div class="page-content d-flex align-items-stretch">
                <?php $this->load->view("user_ukm/_partials/navbar.php")?>

                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Dashboard</h2>
	                                
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row flex-row">
                            <!-- Begin Widget 16 -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="widget widget-16 has-shadow">
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-xl-8 d-flex flex-column justify-content-center align-items-center">
                                                <?php foreach($hitung_produk as $t) { ?>
                                                <div class="counter"><?= $t->count ?></div>
                                                <?php } ?>
                                                <div class="total-views">Total Produk</div>
                                            </div>
                                            <div class="col-xl-4 d-flex justify-content-center align-items-center">
                                                <div class="pages-views">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget 16 -->
                            <!-- Begin Widget 17 -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="widget widget-17 has-shadow">
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-xl-7 d-flex flex-column justify-content-center align-items-center">
                                            <?php foreach($hitung_pesanan as $hp) { ?>
                                                <div class="counter"><?= $hp->count ?></div>
                                                <?php } ?>

                                                <div class="total-visitors">Penjualan Bulanan</div>
                                            </div>
                                            <div class="col-xl-5 d-flex justify-content-center align-items-center">
                                                <div class="visitors">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget 17 -->
                        </div>
                        <!-- End Row -->
                        <!-- Begin Row -->
                        <div class="row flex-row">
                        </div>
                        <!-- End Row -->
                        <div class="row flex-row">
                        </div>
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    <footer class="main-footer">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <p class="text-gradient-02">Siporu</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="documentation.html">Documentation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="changelog.html">Changelog</a>
                                    </li>
                                </ul>
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
        <!-- Begin Success Modal -->
        <div id="delay-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-5">
                            <h2 class="text-dark">Meeting successfully created</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Success Modal -->
        <!-- Begin Modal -->
        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view("user_ukm/_partials/footer.php") ?>
