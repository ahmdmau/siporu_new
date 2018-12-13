<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>
        <meta name="description" content="Siporu adalah Sistem Informasi Portal Ukm">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <link rel="stylesheet" href="<?= base_url('assets/ukm/vendors/css/base/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/ukm/vendors/css/base/elisyam-1.5.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/ukm/css/owl-carousel/owl.carousel.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/ukm/css/owl-carousel/owl.theme.min.css') ?>">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        <style type="text/css">
            .elisyam-bg.background-01{
                background: url("http://localhost/siporu/upload/siporu/banner.jpg") no-repeat;
            }
        </style>
    </head>
    