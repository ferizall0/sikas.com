<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SIKAS -> SISTEM INFORMASI KAS -->
    <title><?= $header; ?></title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">SIKAS</a>
                <!-- SIKAS -> SISTEM INFORMASI KAS -->
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
                <a href="<?= site_url('login/logout') ?>" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>
                    <li>
                        <a href="<?= site_url('home') ?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?= site_url('masuk') ?>"><i class="glyphicon glyphicon-floppy-save"></i> Kas Masuk</a>
                    </li>
                    <li>
                        <a href="<?= site_url('keluar') ?>"><i class="glyphicon glyphicon-floppy-open"></i> Kas
                            Keluar</a>
                    </li>
                    <li>
                        <a href="<?= site_url('rekap') ?>"><i class="glyphicon glyphicon-th-list"></i> Rekapitulasi
                            Kas</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">