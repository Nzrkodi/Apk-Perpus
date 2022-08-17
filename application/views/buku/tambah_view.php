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
                                                <label>Basic Select</label>
                                                <select name="kategori" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" required>
                                                        <option disabled selected value> -- Pilih Kategori -- </option>
                                                        <?php foreach($kats as $isi){?>
                                                            <option value="<?= $isi['id_kategori'];?>"><?= $isi['nama_kategori'];?></option>
                                                        <?php }?>
                                                </select>
                                                <label>Basic Select</label>
                                                <select name="rak" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" required>
                                                        <option disabled selected value> -- Pilih Rak / Lokasi -- </option>
                                                        <?php foreach($rakbuku as $isi){?>
                                                            <option value="<?= $isi['id_rak'];?>"><?= $isi['nama_rak'];?></option>
                                                        <?php }?>
                                                </select>
                                            </div>
                                            <label for="">ISBN</label>
                                            <input type="text" class="form-control" name="isbn" placeholder="Contoh: 2345-2764-3276-2234-2" required>
                                            <label for="">Judul Buku</label>
                                            <input type="text" class="form-control" name="title" placeholder="Contoh: Bahasa Indonesia" required>
                                            <label for="">Nama Pengarang</label>
                                            <input type="text" class="form-control" name="pengarang" placeholder="Nama Pengarang" required>
                                            <label for="">Penerbit</label>
                                            <input type="text" class="form-control" name="penerbit" placeholder="Nama Penerbit" required>
                                            <label for="">Tahun Buku</label>
                                            <input type="number" class="form-control" name="thn" placeholder="Tahun Buku" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Jumlah Buku</label>
                                            <input type="number" class="form-control" name="jml" placeholder="Jumlah Buku" required>
                                            <label for="">Asal/Sumber</label>
                                            <input type="text" class="form-control" name="asal" placeholder="Contoh: Dana Bos" required>
                                            <label for="">Sampul</label>
                                            <input type="file" class="form-control" accept="image/*" name="gambar" placeholder="Tahun Buku">
                                            <label for="">Lampiran Buku</label>
                                            <input type="file" class="form-control" accept="" name="lampiran" placeholder="Tahun Buku">
                                            <label for="">Keterangan lainya</label>
                                            <textarea class="form-control" name="ket" id="summernotehal" cols="30" rows="7" required></textarea>
                                            <br>
                                            <input type="hidden" name="tambah" value="tambah">
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


