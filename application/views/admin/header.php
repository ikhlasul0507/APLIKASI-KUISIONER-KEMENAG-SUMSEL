<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $judul; ?></title>

    <link href='<?= base_url();?>assets/images/logokemenag.png' rel='shortcut icon'>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= base_url();?>assets/style.css">
    <script src="<?= base_url();?>assets/js/custom.js"></script>
</head>
<body background="<?= base_url();?>assets/images/bg-admin.jpg">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home"><img class="d-block" src="<?= base_url();?>assets/images/logokemenag.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li class="current-menu-item"><a href="<?= base_url();?>admin/konten">Beranda</a></li>
                                <li><a href="<?= base_url();?>admin/pengguna">Data Pengguna</a></li>
                                <li><a href="<?= base_url();?>admin/kuisioner">Data Kuisioner</a></li>
                                <li><a href="<?= base_url();?>admin/tambah">Tambah Admin</a></li>


                                <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                    <a class="d-flex justify-content-center align-items-center" href="<?= base_url();?>admin/logout" onclick="return confirm('Yakin Ingin Keluar ?');">Logout</a>
                                </li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
