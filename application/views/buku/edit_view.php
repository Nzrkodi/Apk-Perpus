<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1 class="text-center">Form Tambah Buku</h1>
                        </div>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="input-knob-dial-wrap">
                            <div class="row">
                                <form action="<?php echo base_url('data/prosesbuku');?>" method="POST" enctype="multipart/form-data">
                                    <div class="col-lg-12">
                                        <div class="col-md-6">
                                            <div class="chosen-select-single mg-b-20">
                                                <label><b>Kategori</b></label>
                                                <select name="kategori" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" required>
                                                        <option disabled selected value> -- Pilih Kategori -- </option>
                                                        <?php foreach($kats as $isi){?>
                                                            <option value="<?= $isi['id_kategori'];?>"<?php if($isi['id_kategori'] == $buku->id_kategori){ echo 'selected';}?>><?= $isi['nama_kategori'];?></option>
                                                        <?php }?>
                                                </select>
                                                <label><b>Rak</b></label>
                                                <select name="rak" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" required>
                                                        <option disabled selected value> -- Pilih Rak / Lokasi -- </option>
                                                        <?php foreach($rakbuku as $isi){?>
                                                            <option value="<?= $isi['id_rak'];?>" <?php if($isi['id_rak'] == $buku->id_rak){ echo 'selected';}?>><?= $isi['nama_rak'];?></option>
                                                        <?php }?>
                                                </select>
                                            </div>
                                           <div class="form-group">
                                                <label>ISBN</label>
                                                <input type="text" class="form-control" value="<?= $buku->isbn;?>" name="isbn"  placeholder="Contoh ISBN : 978-602-8123-35-8" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Judul Buku</label>
                                                <input type="text" class="form-control" value="<?= $buku->title;?>" name="title" placeholder="Contoh : Cara Cepat Belajar Pemrograman Web" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Pengarang</label>
                                                <input type="text" class="form-control" value="<?= $buku->pengarang;?>" name="pengarang" placeholder="Nama Pengarang" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Penerbit</label>
                                                <input type="text" class="form-control" value="<?= $buku->penerbit;?>" name="penerbit" placeholder="Nama Penerbit" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Buku</label>
                                                <input type="number" class="form-control" value="<?= $buku->thn_buku;?>" name="thn" placeholder="Tahun Buku : 2019" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Asal/Sumber</label>
                                                <input type="text" class="form-control" value="<?= $buku->asal_buku;?>" name="asal" placeholder="Contoh : Dana Bos" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jumlah Buku</label>
                                                <input type="number" class="form-control" value="<?= $buku->jml;?>" name="jml" placeholder="Jumlah buku : 12" required>
                                            </div>
                                        <div class="form-group">
                                        <label>Sampul <small style="color:green">(gambar) * opsional</small></label>
                                            <input type="file" accept="image/*" name="gambar">

                                            <?php if(!empty($buku->sampul !== "0")){?>
                                            <br/>
                                            <a href="<?= base_url('assets/image/buku/'.$buku->sampul);?>" target="_blank">
                                                <img src="<?= base_url('assets/image/buku/'.$buku->sampul);?>" style="width:80px;height:90px;" class="img-responsive">
                                            </a>
                                            <?php }else{ echo '<br/><p style="color:red">* Tidak ada Sampul</p>';}?>
                                        </div>
                                        <div class="form-group">
                                        <label>Lampiran Buku <small style="color:green">(pdf) * ganti opsional</small></label>
                                            <input type="file" accept="pdf/*" name="lampiran">
                                            <br>
                                            <?php if(!empty($buku->lampiran !== "0")){?>
                                            <a href="<?= base_url('assets/image/buku/'.$buku->lampiran);?>" class="btn btn-primary btn-md" target="_blank">
                                                <i class="fa fa-download"></i> Sample Buku
                                            </a>
                                            <?php  }else{ echo '<br/><p style="color:red">* Tidak ada Lampiran</p>';}?>
                                        </div>
                                            <label for="">Keterangan lainya</label>
                                            <textarea class="form-control" name="ket" id="summernotehal" cols="30" rows="7" required><?= $buku->isi; ?></textarea>
                                            <br>
                                            <input type="hidden" name="gmbr" value="<?= $buku->sampul;?>">
                                            <input type="hidden" name="lamp" value="<?= $buku->lampiran;?>">
                                            <input type="hidden" name="edit" value="<?= $buku->id_buku;?>">
                                            <button type="submit" class="btn btn-success widget-btn-1" style="float: right;">Simpan</button>
                                            <a href="<?= base_url('data');?>" class="btn btn-danger widget-btn-4" style="float: right; margin-right: 10px;">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

