<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Data</span> Buku</h1><hr>
                            <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>
                            <?php if($this->session->userdata('level') == 'Petugas'){?>
                                <a href="data/bukutambah" class="btn btn-success widget-btn-1 float-right"><b>+</b> Tambah Data</a>
                            <?php }?>
                        </div>  
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <?php if($this->session->userdata('level') == 'Petugas'){?>
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                            <?php }?>
                            <?php if($this->session->userdata('level') == 'Siswa'){?>
                                <table id="table2" class="table table-bordered table-striped">
                            <?php }?>
                                <thead>
                                    <tr>
                                        <th >No</th>
                                        <th >Sampul</th>
                                        <th >ISBN</th>
                                        <th >Title</th>
                                        <th >Penerbit</th>
                                        <th >Tahun Buku</th>
                                        <th >Stok Buku</th>
                                        <th >Dipinjam</th>
                                        <th >Tanggal Masuk</th>
                                        <th >Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1;foreach($buku->result_array() as $isi){?>
                                    <tr>
                                        <td><?= $no;?></td> 
                                        <td>
                                            <?php if(!empty($isi['sampul'] !== "0")){?>
                                            <img src="<?php echo base_url();?>assets/image/buku/<?php echo $isi['sampul'];?>" alt="#" 
                                            class="img-responsive" style="height:auto;width:100px;"/>
                                            <?php }else{?>
                                                <i class="fa fa-book fa-3x" style="color:#333;"></i> <br/><br/>
                                                Tidak Ada Sampul
                                            <?php }?>
                                        </td>
                                        <td><?= $isi['isbn'];?></td>
                                        <td><?= $isi['title'];?></td>
                                        <td><?= $isi['penerbit'];?></td>
                                        <td><?= $isi['thn_buku'];?></td>
                                        <td><?= $isi['jml'];?></td>
                                        <td >
                                            <?php
                                                $id = $isi['buku_id'];
                                                $dd = $this->db->query("SELECT * FROM tbl_pinjam WHERE buku_id= '$id' AND status = 'Dipinjam'");
                                                if($dd->num_rows() > 0 )
                                                {
                                                    echo $dd->num_rows();
                                                }else{
                                                    echo '0';
                                                }
                                            ?>
                                        </td>
                                        <td><?= $isi['tgl_masuk'];?></td>
                                            <td <?php if($this->session->userdata('level') == 'Petugas'){?>style="width:17%;"<?php }?>>
                                        
                                            <?php if($this->session->userdata('level') == 'Petugas'){?>
                                                <a href="<?= base_url('data/bukuedit/'.$isi['id_buku']);?>"><button class="btn btn-info widget-btn-2"><i class="fa fa-edit"></i></button></a>
                                                <a href="<?= base_url('data/bukudetail/'.$isi['id_buku']);?>">
                                                <button class="btn btn-success widget-btn-1"><i class="fa-solid fa-eye"></i></button></a>
                                                <a href="<?= base_url('data/prosesbuku?buku_id='.$isi['id_buku']);?>" onclick="return confirm('Anda yakin Buku ini akan dihapus ?');">
                                                <button class="btn btn-danger widget-btn-4"><i class="fa fa-trash"></i></button></a>
                                            <?php }else{?>
                                                <a href="<?= base_url('data/bukudetail/'.$isi['id_buku']);?>">
                                                <button class="btn btn-success widget-btn-1"><i class="fa fa-sign-in"></i> Detail</button></a>
                                            <?php }?>
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