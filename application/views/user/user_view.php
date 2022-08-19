<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1><span class="table-project-n">Data</span> Pengguna</h1>
                                    <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>
                                    <a href="user/tambah" class="btn btn-success widget-btn-1 float-right"><b>+</b> Tambah Data</a>
                                </div> 
                                <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                        </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th>No</th>
                                                <th>ID</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>User</th>
                                                <th>Jenkel</th>
                                                <th>Telepon</th>
                                                <th>Level</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php $no=1;foreach($user as $isi){?>
                                            <tr>
                                                <td></td>
                                                <td><?= $no;?></td>
                                                <td><?= $isi['anggota_id'];?></td>
                                                <td>
                                                    <center>
                                                        <?php if(!empty($isi['foto'] !== "-")){?>
                                                        <img src="<?php echo base_url();?>assets/image/<?php echo $isi['foto'];?>" alt="#" 
                                                        class="img-responsive" style="height:auto;width:50px;"/>
                                                        <?php }else{?>
                                                            <!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
                                                            <i class="fa fa-user fa-3x" style="color:#333;"></i>
                                                        <?php }?>
                                                    </center>
                                                </td>
                                                <td><?= $isi['nama'];?></td>
                                                <td><?= $isi['user'];?></td>
                                                <td><?= $isi['jenkel'];?></td>
                                                <td><?= $isi['telepon'];?></td>
                                                <td><?= $isi['level'];?></td>
                                                <td><?= $isi['alamat'];?></td>
                                                <td style="width:20%;">
                                                    <a href="<?= base_url('user/edit/'.$isi['id_login']);?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                                                    <a href="<?= base_url('user/del/'.$isi['id_login']);?>" onclick="return confirm('Anda yakin user akan dihapus ?');">
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a><!-- 
                                                    <a href="<?= base_url('user/detail/'.$isi['id_login']);?>" target="_blank"><button class="btn btn-primary">
                                                        <i class="fa fa-print"></i> Cetak Kartu</button></a> -->
                                                </td>
                                            </tr>
                                        <?php $no++;}?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>