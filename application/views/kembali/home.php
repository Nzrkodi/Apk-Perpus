<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Data</span> Pengembalian Buku</h1><hr>
                            <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>
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
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true">
                            <?php }?>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pinjam</th>
                                        <th>ID Siswa</th>
                                        <th>Nama</th>
                                        <th>Pinjam</th>
                                        <th>Balik</th>
                                        <th>Nomor Buku</th>
                                        <th style="width:10%">Status</th>
                                        <th>Kembali</th>
                                        <th>Denda</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no=1;
                                    foreach($pinjam->result_array() as $isi){
                                        $anggota_id = $isi['anggota_id'];
                                        $ang = $this->db->query("SELECT * FROM tbl_login WHERE anggota_id = '$anggota_id'")->row();

                                        $pinjam_id = $isi['pinjam_id'];
                                        $denda = $this->db->query("SELECT * FROM tbl_denda WHERE pinjam_id = '$pinjam_id'");
                                        $total_denda = $denda->row();
                                ?>
                                    <tr>
                                        <td><?= $no;?></td>
                                        <td><?= $isi['pinjam_id'];?></td>
                                        <td><?= $isi['anggota_id'];?></td>
                                        <td><?= $ang->nama;?></td>
                                        <td><?= $isi['tgl_pinjam'];?></td>
                                        <td><?= $isi['tgl_balik'];?></td>
                                        <td><?= $isi['no_buku'];?></td>
                                        <td><?= $isi['status'];?></td>
                                        <td>
                                            <?php 
                                                if($isi['tgl_kembali'] == '0')
                                                {
                                                    echo '<p style="color:red;">belum dikembalikan</p>';
                                                }else{
                                                    echo $isi['tgl_kembali'];
                                                }
                                            
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                $jml = $this->db->query("SELECT * FROM tbl_pinjam WHERE pinjam_id = '$pinjam_id'")->num_rows();         
                                                if($denda->num_rows() > 0){
                                                    $s = $denda->row();
                                                    echo $this->M_Admin->rp($s->denda);
                                                }else{
                                                    $date1 = date('Ymd');
                                                    $date2 = preg_replace('/[^0-9]/','',$isi['tgl_balik']);
                                                    $diff = $date2 - $date1;

                                                    if($diff >= 0 )
                                                    {
                                                        echo '<p style="color:green;">
                                                        Tidak Ada Denda</p>';
                                                    }else{
                                                        $dd = $this->M_Admin->get_tableid_edit('tbl_biaya_denda','stat','Aktif'); 
                                                        echo '<p style="color:red;font-size:18px;">'.$this->M_Admin->rp($jml*($dd->harga_denda*abs($diff))).' 
                                                        </p><small style="color:#333;">* Untuk '.$jml.' Buku</small>';
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php if($this->session->userdata('level') == 'Petugas'){ ?>
                                                <a href="<?= base_url('transaksi/detailpinjam/'.$isi['pinjam_id']);?>" 
                                                    class="btn btn-success widget-btn-1 btn-sm" title="detail pinjam">
                                                    <i class="fa fa-eye"></i></button></a>

                                                <a href="<?= base_url('transaksi/prosespinjam?pinjam_id='.$isi['pinjam_id']);?>" 
                                                    onclick="return confirm('Anda yakin Peminjaman Ini akan dihapus ?');" 
                                                    class="btn btn-danger widget-btn-4 btn-sm" title="hapus pinjam">
                                                    <i class="fa fa-trash"></i></a>
                                            <?php }else{?>
                                                <a href="<?= base_url('transaksi/detailpinjam/'.$isi['pinjam_id']);?>" 
                                                    class="btn btn-success widget-btn-1 btn-sm text-light" title="detail pinjam">
                                                    <i class="fa fa-eye"></i> Detail</a>
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

