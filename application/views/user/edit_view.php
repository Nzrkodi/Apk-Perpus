<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                           <h1 class="text-center">Form Edit User</h1><hr>
                           <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>
                        </div>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="input-knob-dial-wrap">
                            <div class="row">
                                <div class="container-fluid">
                                    <form action="<?php echo base_url('user/upd');?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Pengguna</label>
                                                <input type="text" class="form-control" value="<?= $user->nama;?>" name="nama" required="required" placeholder="Nama Pengguna">
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" name="lahir" value="<?= $user->tempat_lahir;?>" required="required" placeholder="Contoh : Bekasi">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tgl_lahir" value="<?= $user->tgl_lahir;?>" required="required" placeholder="Contoh : 1999-05-18">
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" readonly value="<?= $user->user;?>"  name="user" required="required" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label>Password (opsional)</label>
                                                <input type="password" class="form-control" name="pass" placeholder="Isi Password Jika di Perlukan Ganti">
                                            </div>
                                            <?php if($this->session->userdata('level') == 'Petugas'){?>
                                            <div class="form-group">
                                                <label>Level</label>
                                                <select name="level" class="form-control" required="required">
                                                    <option <?php if($user->level == 'Petugas'){ echo 'selected';}?>>Petugas</option>
                                                    <option <?php if($user->level == 'Siswa'){ echo 'selected';}?>>Siswa</option>
                                                </select>
                                            </div>
                                            <?php }?>
                                            <?php if($this->session->userdata('level') == 'Siswa'){?>
                                                <input type="hidden" class="form-control" value="<?= $user->level;?>" name="level" readonly>
                                            <?php }?>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <br/>
                                                <input type="radio" name="jenkel" <?php if($user->jenkel == 'Laki-Laki'){ echo 'checked';}?> value="Laki-Laki" required="required"> Laki-Laki
                                                <br/>
                                                <input type="radio" name="jenkel" <?php if($user->jenkel == 'Perempuan'){ echo 'checked';}?> value="Perempuan" required="required"> Perempuan
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" name="alamat"  required="required"><?= $user->alamat;?></textarea>
                                                <input type="hidden" class="form-control" value="<?= $user->id_login;?>" name="id_login">
                                                <input type="hidden" class="form-control" value="<?= $user->foto;?>" name="foto">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Telepon</label>
                                                <input id="uintTextBox" class="form-control" value="<?= $user->telepon;?>" name="telepon" required="required" placeholder="Contoh : 089618173609">
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email"  value="<?= $user->email;?>" readonly class="form-control" name="email" required="required" placeholder="Contoh : fauzan1892@codekop.com">
                                            </div>
                                            <div class="form-group">
                                                <label>Pas Foto</label>
                                                <input type="file" accept="image/*" name="gambar">
                                                
                                                <br/>
                                                <img src="<?= base_url('assets/image/'.$user->foto);?>" class="img-responsive" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success widget-btn-1">Edit Data</button> 
                                </form>
                                <?php if($this->session->userdata('level') == 'Petugas'){?>
                                    <a href="<?= base_url('user');?>" class="btn btn-danger widget-btn-4">Kembali</a>
                                <?php }elseif($this->session->userdata('level') == 'Siswa'){?>
                                    <a href="<?= base_url('transaksi');?>" class="btn btn-danger widget-btn-4">Kembali</a>
                                <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

