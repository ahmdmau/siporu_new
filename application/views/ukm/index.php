<?php $this->load->view("ukm/_partials/header.php") ?>
    <?php $this->load->view("ukm/_partials/top.php") ?>

            <div class="page-content d-flex align-items-stretch">
                <?php $this->load->view("ukm/_partials/navbar.php")?>

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
                                                <div class="counter">15</div>
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
                                                <div class="counter">1,658</div>
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

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="widget widget-17 has-shadow">
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-xl-7 d-flex flex-column justify-content-center align-items-center">
                                                <div class="counter">1,658</div>
                                                <div class="total-visitors">Penjualan Tahunan</div>
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
                            <div class="col-xl-12 col-md-6">
                                <!-- Begin Widget 09 -->
                                <div class="widget widget-09 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header d-flex align-items-center">
                                        <h2>Delivered Orders</h2>
                                        <div class="widget-options">
                                            <button type="button" class="btn btn-shadow">View all</button>
                                        </div>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-xl-10 col-12 no-padding">
                                                <div>
                                                    <canvas id="orders"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-12 d-flex flex-column my-auto no-padding text-center">
                                                <div class="new-orders">
                                                    <div class="title">New Orders</div>
                                                    <div class="circle-orders">
                                                        <div class="percent-orders"></div>
                                                    </div>
                                                </div>
                                                <div class="some-stats mt-5">
                                                    <div class="title">Total Delivered</div>
                                                    <div class="number text-blue">856</div>
                                                </div>
                                                <div class="some-stats mt-3">
                                                    <div class="title">Total Estimated</div>
                                                    <div class="number text-blue">297</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Widget 09 -->
                            </div>
                        </div>
                        <!-- End Row -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Begin Widget 07 -->
                                <div class="widget widget-07 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Daftar Produk</h2>
                                        <div class="widget-options">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary ripple">Week</button>
                                                <button type="button" class="btn btn-primary ripple">Month</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body">
                                        <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="check-all" id="check-all">
                                                                <label for="check-all"></label>
                                                            </div>
                                                        </th>
                                                        <th>Order ID</th>
                                                        <th>Customer Name</th>
                                                        <th>Country</th>
                                                        <th>Ship Date</th>
                                                        <th><span style="width:100px;">Status</span></th>
                                                        <th>Order Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb1" id="cb1">
                                                                <label for="cb1"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">054-01-FR</span></td>
                                                        <td>Lori Baker</td>
                                                        <td>US</td>
                                                        <td>10/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$139.45</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb2" id="cb2">
                                                                <label for="cb2"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">021-12-US</span></td>
                                                        <td>Lawrence Crawford</td>
                                                        <td>FR</td>
                                                        <td>10/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$189.00</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb3" id="cb3">
                                                                <label for="cb3"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">189-01-RU</span></td>
                                                        <td>Samuel Walker</td>
                                                        <td>AU</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span></td>
                                                        <td>$107.55</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb4" id="cb4">
                                                                <label for="cb4"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">092-06-FR</span></td>
                                                        <td>Angela Walters</td>
                                                        <td>US</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small success">Delivered</span></span></td>
                                                        <td>$129.85</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb5" id="cb5">
                                                                <label for="cb5"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">021-09-US</span></td>
                                                        <td>Ryan Hanson</td>
                                                        <td>ES</td>
                                                        <td>07/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$199.95</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb6" id="cb6">
                                                                <label for="cb6"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">054-01-FR</span></td>
                                                        <td>Evelyn Black</td>
                                                        <td>FR</td>
                                                        <td>10/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$139.45</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb7" id="cb7">
                                                                <label for="cb7"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">021-12-US</span></td>
                                                        <td>James Morris</td>
                                                        <td>EN</td>
                                                        <td>10/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$189.00</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb8" id="cb8">
                                                                <label for="cb8"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">189-01-RU</span></td>
                                                        <td>Valentin H.</td>
                                                        <td>AU</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span></td>
                                                        <td>$107.55</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb9" id="cb9">
                                                                <label for="cb9"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">092-06-FR</span></td>
                                                        <td>Beverly Matthews</td>
                                                        <td>RU</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$129.85</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb10" id="cb10">
                                                                <label for="cb10"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">021-09-US</span></td>
                                                        <td>Jeffrey Arnold</td>
                                                        <td>US</td>
                                                        <td>07/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$199.95</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- End Widget Body -->
                                    <!-- Begin Widget Footer -->
                                    <div class="widget-footer d-flex align-items-center">
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
                                    <!-- End Widget Footer -->
                                </div>
                                <!-- End Widget 07 -->
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
        
        <?php $this->load->view("ukm/_partials/footer.php") ?>
