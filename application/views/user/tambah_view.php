<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1 class="text-center">Form Tambah User</h1>
                        </div>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="input-knob-dial-wrap">
                            <div class="row">
                                <div class="container-fluid">
                                    <form action="<?php echo base_url('user/add');?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nama Pengguna</label>
                                                    <input type="text" class="form-control" name="nama" required="required" placeholder="Nama Pengguna">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tempat Lahir</label>
                                                    <input type="text" class="form-control" name="lahir" required="required" placeholder="Contoh : Bekasi">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date" class="form-control" name="tgl_lahir" required="required" placeholder="Contoh : 1999-05-18">
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="user" required="required" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" name="pass" required="required" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <select name="level" class="form-control" required="required">
                                                    <option>Petugas</option>
                                                    <option>Siswa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <select name="jenkel" class="form-control" required="required">
                                                    <option disabled selected value>Pilih Jenis Kelamin</option>
                                                    <option>Laki Laki</option>
                                                    <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Telepon</label>
                                                    <input id="uintTextBox" class="form-control" name="telepon" required="required" placeholder="Contoh : 089618173609">
                                                </div>
                                                <div class="form-group">
                                                    <label>E-mail</label>
                                                    <input type="email" class="form-control" name="email" required="required" placeholder="Contoh : username123@gmailcom">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pas Foto</label>
                                                    <input type="file" accept="image/*" name="gambar" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" name="alamat" required="required"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                        <a href="<?= base_url('data');?>" class="btn btn-danger widget-btn-4">Kembali</a>
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

