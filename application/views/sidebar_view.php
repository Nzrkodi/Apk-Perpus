<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> PerpusMan4 | <?= $title_web ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/static/img/sman4.png">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/alerts.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/data-table/bootstrap-editable.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/fontawesome/css/all.css">

    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/select2/select2.min.css">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/chosen/bootstrap-chosen.css">

    <!-- modernizr JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/fontawesome/js/all.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .active{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            background-color: rgb(0, 135, 255, 1.0);
            border-radius: 4%;
        }
        .mini-click-non{
            color: black;
        }
        .mini-sub-pro{
            color: black;
        }
        .text{
            color: black;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro" >
        <nav id="sidebar" class="" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?= base_url(); ?>assets/static/img/logo/logo1.png" alt=""/></a>
                <strong><a href="index.html"><img src="<?= base_url(); ?>assets/static/img/logo/logosn1.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <hr style="color: red;">
                    <ul class="metismenu" id="menu1">
                        <?php if($this->session->userdata('level') == 'Petugas'){?>
                        <li class="<?php if($this->uri->uri_string() == 'dashboard'){ echo 'active';}?> ">
                            <a class="" href="<?= base_url('dashboard');?>">
                               <span class="educate-icon educate-home icon-wrap"></span>
                               <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>
                        <li class="<?php if($this->uri->uri_string() == 'user'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'user/tambah'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'user/edit/'.$this->uri->segment('3')){ echo 'active';}?>">
                            <a class="" href="<?= base_url('user');?>">
                               <span class="educate-icon educate-professor icon-wrap"></span>
                               <span class="mini-click-non">Menage User</span>
                            </a>
                        </li>
                        <li class="treeview <?php if($this->uri->uri_string() == 'data/kategori'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'data/rak'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'data'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'data/bukutambah'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'data/bukudetail/'.$this->uri->segment('3')){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'data/bukuedit/'.$this->uri->segment('3')){ echo 'active';}?>">
                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Data</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li class="<?php if($this->uri->uri_string() == 'data')?>
                                <?php if($this->uri->uri_string() == 'data/bukutambah')?>
                                <?php if($this->uri->uri_string() == 'data/bukudetail/'.$this->uri->segment('3'))?>
                                <?php if($this->uri->uri_string() == 'data/bukuedit/'.$this->uri->segment('3'))?>">
                            <a title="All Professors" href="<?= base_url("data");?>"><span class="mini-sub-pro"><i class="fa fa-book"></i> Buku</span></a></li>
                                <li ><a title="Add Professor" href="<?= base_url("data/rak");?>"><span class="mini-sub-pro"><i class="fa fa-tags"></i> Rak</span></a></li>
                                <li ><a title="Edit Professor" href="<?= base_url("data/kategori");?>"><span class="mini-sub-pro"><i class="fa fa-list"></i> Kategori</span></a></li>
                            </ul>
                        </li>
                        <li class="treeview 
                            <?php if($this->uri->uri_string() == 'transaksi'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'transaksi/kembali'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'transaksi/pinjam'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'transaksi/detailpinjam/'.$this->uri->segment('3')){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'transaksi/kembalipinjam/'.$this->uri->segment('3')){ echo 'active';}?>">
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Transaksi</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                        <li id="actived" class="<?php if($this->uri->uri_string() == 'transaksi')?>
                            <?php if($this->uri->uri_string() == 'transaksi/pinjam')?>
                            <?php if($this->uri->uri_string() == 'transaksi/kembalipinjam/'.$this->uri->segment('3'))?>"><a title="All Professors" href="<?= base_url("transaksi");?>"><span class="mini-click-non"><i class="fa fa-download"></i> Peminjaman</span></a></li>
                                <li <?php if($this->uri->uri_string() == 'transaksi/kembali')?>><a title="Add Professor" href="<?= base_url("transaksi/kembali");?>"><span class="mini-sub-pro"><i class="fa fa-upload"></i> Pengembalian</span></a></li>
                            </ul>
                        </li>
                        <li class="<?php if($this->uri->uri_string() == 'transaksi/denda'){ echo 'active';}?> ">
                            <a title="" href="<?= base_url("transaksi/denda");?>" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Denda</span></a>
                        </li>
                        <?php }?>

                        <?php if($this->session->userdata('level') == 'Siswa'){?>
                            <li class="<?php if($this->uri->uri_string() == 'dashboard'){ echo 'active';}?> ">
                                <a href="<?= base_url("dashboard");?>" class="cursor">
                                    <i class="fa fa-home "></i> <span class="text">Dashboard </span>
                                </a>
                            </li>
                            <li class="<?php if($this->uri->uri_string() == 'data'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'data/bukudetail/'.$this->uri->segment('3')){ echo 'active';}?>">
                                <a href="<?= base_url("data");?>" class="cursor">
                                    <i class="fa fa-search "></i>  <span class="text">Cari Buku</span>
                                </a>
                            </li>
                            <li class="<?php if($this->uri->uri_string() == 'transaksi'){ echo 'active';}?>">
                                <a href="<?= base_url("transaksi");?>" class="cursor">
                                    <i class="fa fa-upload "></i> <span class="text">Data Peminjaman </span>
                                </a>
                            </li>
                            <li class="<?php if($this->uri->uri_string() == 'transaksi/kembali'){ echo 'active';}?>">
                                <a href="<?= base_url("transaksi/kembali");?>" class="cursor">
                                    <i class="fa fa-upload "></i> <span class="text">Data Pengembalian</span>
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
