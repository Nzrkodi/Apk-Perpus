<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1 class="text-center">Detail Peminjaman Kelas</h1>
                        </div>
                        <hr>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="table-responsive">
                                    <table class="table">
                                        <tr style="background: #0060ff; color: white;">
                                            <td colspan="3">Data Transaksi</td>
                                        </tr>
                                        <tr>
                                            <td>No Peminjaman</td>
                                            <td>:</td>
                                            <td>
                                                <?= $pinjam->pinjam_id;?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Peminjaman</td>
                                            <td>:</td>
                                            <td>
                                                <?= $pinjam->tgl_pinjam;?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ID Siswa</td>
                                            <td>:</td>
                                            <td>
                                                <?= $pinjam->anggota_id;?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kelas</td>
                                            <td>:</td>
                                            <td>
                                                <?= $pinjam->kelas;?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Biodata</td>
                                            <td>:</td>
                                            <td>
                                                <?php
                                                $user = $this->M_Admin->get_tableid_edit('tbl_login','anggota_id',$pinjam->anggota_id);
                                                error_reporting(0);
                                                if($user->nama != null)
                                                {
                                                    echo '<table class="table table-striped">
                                                                <tr>
                                                                    <td>Nama Siswa</td>
                                                                    <td>:</td>
                                                                    <td>'.$user->nama.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Telepon</td>
                                                                    <td>:</td>
                                                                    <td>'.$user->telepon.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>E-mail</td>
                                                                    <td>:</td>
                                                                    <td>'.$user->email.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat</td>
                                                                    <td>:</td>
                                                                    <td>'.$user->alamat.'</td>
                                                                </tr>
                                                            </table>';
                                                }else{
                                                    echo 'Siswa Tidak Ditemukan !';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr style="background: #0060ff; color: white;">
                                                <td colspan="3">Pinjam Buku</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td class="text-success">
                                                    <b><?= $pinjam->status;?></b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tgl Kembali</td>
                                                <td>:</td>
                                                <td>
                                                    <?php 
                                                        if($pinjam->tgl_kembali == '0')
                                                        {
                                                            echo '<p style="color:red;">belum dikembalikan</p>';
                                                        }else{
                                                            echo $pinjam->tgl_kembali;
                                                        }
                                                    
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Buku</td>
                                                <td>:</td>
                                                <td>
                                                    <?= $pinjam->jmlh_buku;?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kode Buku</td>
                                                <td>:</td>
                                                <td>
                                                <?php
                                                    $pin = $this->M_Admin->get_tableid('pinjam_kelas','pinjam_id',$pinjam->pinjam_id);
                                                    $no =1;
                                                    foreach($pin as $isi)
                                                    {
                                                        $buku = $this->M_Admin->get_tableid_edit('tbl_buku','buku_id',$isi['buku_id']);
                                                        echo $no.'. '.$buku->buku_id.'<br/>';
                                                    $no++;}

                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Data Buku</td>
                                                <td>:</td>
                                                <td>
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Title</th>
                                                                <th>Penerbit</th>
                                                                <th>Tahun</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            $no=1;
                                                            foreach($pin as $isi)
                                                            {
                                                                $buku = $this->M_Admin->get_tableid_edit('tbl_buku','buku_id',$isi['buku_id']);
                                                        ?>
                                                            <tr>
                                                                <td><?= $no;?></td>
                                                                <td><?= $buku->title;?></td>
                                                                <td><?= $buku->penerbit;?></td>
                                                                <td><?= $buku->thn_buku;?></td>
                                                            </tr>
                                                        <?php $no++;}?>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <a href="<?= base_url('peminjaman');?>" class="btn btn-danger btn-md" style="float: right;">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



