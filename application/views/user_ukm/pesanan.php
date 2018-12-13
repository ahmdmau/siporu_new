<?php $this->load->view("user_ukm/_partials/header.php") ?>
        <?php $this->load->view("user_ukm/_partials/top.php") ?>

        

            <div class="page-content d-flex align-items-stretch">
                <?php $this->load->view("user_ukm/_partials/navbar.php") ?>
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Pesanan</h2>
	                                
	                            </div>
                            </div>
                        </div>
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Begin Widget 07 -->
                                <div class="widget widget-07 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Daftar Pesanan</h2>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body">
                                        <?php if ($invoices == false) { ?>
                                        <h3 align="center">Tidak ada data</h3>
                                        <?php } else { ?>
                                        <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Invoices Id</th>
                                                        <th>Date</th>
                                                        <th>Due Date</th>
                                                        <th><span style="width:100px;">Status</span></th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($invoices as $invoice) : ?>
                                                    <tr>
                                                        <td><span class="text-primary"><?= $invoice->id ?></span></td>
                                                        <td><?= $invoice->date ?></td>
                                                        <td><?= $invoice->due_date ?></td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info"><?= $invoice->status ?></span></span></td>
                                                        <td class="td-actions">
                                                            <a href="<?= base_url('user_ukm/invoices/detail/' . $invoice->id)?>">Detail</a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <!-- End Widget Body -->
                                    <!-- Begin Widget Footer -->
                                    <div class="widget-footer d-flex align-items-center">
                                        <div class="mr-auto p-2">
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
                        </div>
                    </footer>
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>

                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Success Modal -->

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
        