<!-- End Modal -->
        <!-- Begin Vendor Js -->
        <script src="<?= base_url('assets/ukm/vendors/js/base/jquery.min.js')?>"></script>
        <script src="<?= base_url('assets/ukm/vendors/js/base/core.min.js') ?>"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="<?= base_url('assets/ukm/vendors/js/nicescroll/nicescroll.min.js') ?>"></script>
        <script src="<?= base_url('assets/ukm/vendors/js/chart/chart.min.js') ?>"></script>
        <script src="<?= base_url('assets/ukm/vendors/js/progress/circle-progress.min.js') ?>"></script>
        <script src="<?= base_url('assets/ukm/vendors/js/calendar/moment.min.js') ?>"></script>
        <script src="<?= base_url('assets/ukm/vendors/js/calendar/fullcalendar.min.js') ?>"></script>
        <script src="<?= base_url('assets/ukm/vendors/js/owl-carousel/owl.carousel.min.js') ?>"></script>
        <script src="<?= base_url('assets/ukm/vendors/js/app/app.js') ?>"></script>
        <script src="<?= base_url('assets/ukm/vendors/js/bootstrap-wizard/bootstrap.wizard.min.js') ?>"></script>
        <script src="<?= base_url('assets/ukm/js/components/wizard/form-wizard.min.js') ?>"></script>

        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="<?= base_url('assets/ukm/js/dashboard/db-default.js') ?>"></script>
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

        <!-- <script>
            tinymce.init({
                selector: '#deskripsi'
            });
        </script> -->
        <script> 
            function confirm(url) {
                $('#btn-delete').attr('href', url);
            }
        </script>
        <!-- End Page Snippets -->
    </body>
    </html>