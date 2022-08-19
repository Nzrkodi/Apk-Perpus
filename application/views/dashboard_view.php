<?php if($this->session->userdata('level') == 'Siswa'){?>
<?php
$d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
?>
<div class="widgets-programs-area" style="margin-top: -60px;">
    <div class="hpanel widget-int-shape responsive-mg-b-30" style="">
        <div class="row">
            <div class="" style="padding: 30px;"> 
                <div class="col-md-6">
                    <div class="widget-cl-1">
                        <h1 class="text-success" style="margin-top: 100px;"><b>Hallo <?= $d->nama;?></b></h2>
                        <h3>Selamat Datang di Perpustakaan Melati <br>SMA NEGERI 4 PALU</h3><br>
                        <h4>Silahkan Klik Dibawah ini Untuk Pencarian Buku....</h4>
                        <a href="<?= base_url("data");?>" class="btn btn-success widget-btn-1"><i class="fa fa-search"></i> <i>Search</i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?= base_url(); ?>/assets/image/buku2.png" alt="Gamabar Admin" width="60%" style="margin-left: 50px; margin-top: px;">
                </div>
            </div>
        </div>          
    </div>
</div>

<div class="widgets-programs-area" style="margin-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Data Buku</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-course"></i>
                        </div>
                        <div class="m-t-xl widget-cl-2">
                            <h1 class="text-info"><?= $count_buku ?></h1>
                            <small>
                                <button class="btn btn-info widget-btn-2">More info</button>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Peminjaman</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-charts"></i>
                        </div>
                        <div class="m-t-xl widget-cl-3">
                            <h1 class="text-warning"><?= $count_pinjam ?></h1>
                            <small>
                                <button class="btn btn-warning widget-btn-3 btn-sm">More info -></button>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Pengembalian</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-charts"></i>
                        </div>
                        <div class="m-t-xl widget-cl-4">
                            <h1 class="text-danger"><?= $count_kembali ?></h1>
                            <small>
                                <button class="btn btn-danger widget-btn-4 btn-sm">More info -></button>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
</div>
<?php } ?>

<?php if($this->session->userdata('level') == 'Petugas'){?>
<?php
    $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
?>
  
  <div class="widgets-programs-area" style="margin-top: -60px;">
    <div class="hpanel widget-int-shape responsive-mg-b-30" style="">
        <div class="row">
            <div class="" style="padding: 30px;"> 
                <div class="col-md-6">
                    <div class="widget-cl-1">
                        <h1 class="text-success" style="margin-top: 100px;"><b>Hallo <?= $d->nama;?></b></h2>
                        <h3>Selamat Datang di Perpustakaan Melati <br>SMA NEGERI 4 PALU</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?= base_url(); ?>/assets/image/buku2.png" alt="Gamabar Admin" width="60%" style="margin-left: 50px; margin-top: px;">
                </div>
            </div>
        </div>          
    </div>
</div>

<div class="widgets-programs-area" style="margin-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Data Anggota</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-professor"></i>
                        </div>
                        <div class="m-t-xl widget-cl-1">
                            <h1 class="text-success"><?= $count_pengguna ?></h1>
                            <small>
                                <button class="btn btn-success widget-btn-1 btn-sm">More info -></button>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Data Buku</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-course"></i>
                        </div>
                        <div class="m-t-xl widget-cl-2">
                            <h1 class="text-info"><?= $count_buku ?></h1>
                            <small>
                                <button class="btn btn-info widget-btn-2 btn-sm">More info -></button>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Peminjaman</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-charts"></i>
                        </div>
                        <div class="m-t-xl widget-cl-3">
                            <h1 class="text-warning"><?= $count_pinjam ?></h1>
                            <small>
                                <button class="btn btn-warning widget-btn-3 btn-sm">More info -></button>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Pengembalian</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="educate-icon educate-charts"></i>
                        </div>
                        <div class="m-t-xl widget-cl-4">
                            <h1 class="text-danger"><?= $count_kembali ?></h1>
                            <small>
                                <button class="btn btn-danger widget-btn-4 btn-sm">More info -></button>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
</div> 

<?php }?>