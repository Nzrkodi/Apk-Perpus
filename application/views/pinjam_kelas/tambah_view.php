<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1 class="text-center">Form Peminjaman Kelas</h1>
                        </div>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="input-knob-dial-wrap">
                        <div class="container-fluid">
                            <div class="row">
                            <form action="<?php echo base_url('peminjaman/prosespinjam');?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <table class="table table-striped">
                                            <tr>
                                                <td bgcolor="#0070ff" colspan="3" style="color: white;">Data Transaksi</td>
                                            </tr>
                                            <tr>
                                                <td>No Peminjaman</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="nopinjam" value="<?= $nop;?>" readonly class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tgl Peminjaman</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="date" value="<?= date('Y-m-d');?>" name="tgl" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ID Anggota</td>
                                                <td>:</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" required autocomplete="off" name="anggota_id" id="search-box" placeholder="Contoh ID Anggota : AG001" type="text" value="">
                                                        <span class="input-group-btn">
                                                            <a data-toggle="modal" data-target="#TableAnggota" class="btn btn-primary"><i class="fa fa-search"></i></a>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Biodata</td>
                                                <td>:</td>
                                                <td>
                                                    <div id="result_tunggu"> <p style="color:red">* Belum Ada Hasil</p></div>
                                                    <div id="result"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <input type="hidden" name="lama" class="form-control">
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-6">
                                        <table class="table table-striped">
                                            <tr>
                                                <td colspan="3" bgcolor="#0070ff" style="color: white;">Pinjam Buku</td>
                                            </tr>
                                            <tr>
                                                <td>Kelas</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" required placeholder="Masukan Kelas" name="kelas" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Buku</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="number" name="jmlh_buku" class="form-control" placeholder="Masukan Jumlah Buku">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kode Buku</td>
                                                <td>:</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" autocomplete="off" name="buku_id" id="buku-search" placeholder="Contoh ID Buku : BK001" type="text" value="">
                                                        <span class="input-group-btn">
                                                            <a data-toggle="modal" data-target="#TableBuku" class="btn btn-primary"><i class="fa fa-search"></i></a>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Data Buku</td>
                                                <td>:</td>
                                                <td>
                                                    <div id="result_tunggu_buku"> <p style="color:red">* Belum Ada Hasil</p></div>
                                                    <div id="result_buku"></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            <div class="pull-right">
                            <input type="hidden" name="tambah" value="tambah">
                            <a href="<?= base_url('peminjaman');?>" class="btn btn-danger btn-md">Kembali</a>
                            <button type="submit" class="btn btn-success widget-btn-1">Submit</button> 
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="TableBuku">
<div class="modal-dialog" style="width:80%;">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Add Buku</h4>
</div>
<div id="modal_body" class="modal-body fileSelection1">
<table id="table2" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ISBN</th>
                <th>Title</th>
                <th>Penerbit</th>
                <th>Tahun Buku</th>
                <th>Stok Buku</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1;foreach($buku->result_array() as $isi){?>
            <tr>
                <td><?= $no;?></td>
                <td><?= $isi['isbn'];?></td>
                <td><?= $isi['title'];?></td>
                <td><?= $isi['penerbit'];?></td>
                <td><?= $isi['thn_buku'];?></td>
                <td><?= $isi['jml'];?></td>
                <td><?= $isi['tgl_masuk'];?></td>
                <td style="width:17%">
                <button class="btn btn-primary" id="Select_File2" data_id="<?= $isi['buku_id'];?>">
                    <i class="fa fa-check"> </i> Pilih
                </button>
                <a href="<?= base_url('data/bukudetail/'.$isi['id_buku']);?>" target="_blank">
                    <button class="btn btn-success"><i class="fa fa-sign-in"></i> Detail</button></a>
                </td>
            </tr>
        <?php $no++;}?>
        </tbody>
</table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
 <!--modal import -->
 <div class="modal fade" id="TableAnggota">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Add Anggota</h4>
    </div>
    <div id="modal_body" class="modal-body fileSelection1">
    <div class="datatable-dashv1-list custom-datatable-overright">
    <table id="table1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenkel</th>
                <th>Telepon</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1;foreach($user as $isi){
            if($isi['level'] == 'Siswa'){
            ?>
            <tr>
                <td><?= $no;?></td>
                <td><?= $isi['anggota_id'];?></td>
                <td><?= $isi['nama'];?></td>
                <td><?= $isi['jenkel'];?></td>
                <td><?= $isi['telepon'];?></td>
                <td><?= $isi['level'];?></td>
                <td style="width:20%;">
                    <button class="btn btn-primary" id="Select_File1" data_id="<?= $isi['anggota_id'];?>">
                    <i class="fa fa-check"> </i> Pilih
                    </button>
                </td>
            </tr>
        <?php $no++;}}?>
        </tbody>
    </table>
</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
    </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

