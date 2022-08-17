   <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?= base_url(); ?>assets/static/img/logo/logo1.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                       
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <?php
                                                          $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
                                                         ?>
                                                         <?php
                                                            $f = $this->db->query("SELECT * FROM tbl_login WHERE id_login='$idbo'")->row();
                                                            if(!empty($f->foto)){
                                                          ?>
                                                            <img src="<?= base_url();?>assets/image/<?php echo $f->foto;?>" alt="#" />
                                                            <?php }else{?>
                                                            <i class="fa fa-user fa-4x" style="color:#fff;"></i>
                                                            <?php }?>
                                                            <span class="admin-name">(<?= $d->level ?>) <?= $d->nama;?></span>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="<?= base_url('user/edit/'.$this->session->userdata('ses_id'));?>"><span class="edu-icon edu-home-admin author-log-ic"></span><i class="fa-solid fa-gear text-primary"></i> Pengaturan akun</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url();?>login/logout"><span class="edu-icon edu-locked author-log-ic"></span><i class="fa-solid fa-door-closed text-danger"></i> Log out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="events.html"><i class="fa fa-home"></i> Dashboard</a></li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#"><i class="fa fa-folder"></i> Data <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="assets/static-table.html">Buku</a>
                                                </li>
                                                <li><a href="data-table.html">Kategori</a>
                                                </li>
                                                <li><a href="data-table.html">Rak</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#"><i class="fa fa-exchange"></i> Transaksi <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="assets/static-table.html">Peminjaman</a>
                                                </li>
                                                <li><a href="data-table.html">Pengembalian</a>
                                                </li>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="events.html"><i class="fa fa-money"></i> Denda</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <br>
        </div>