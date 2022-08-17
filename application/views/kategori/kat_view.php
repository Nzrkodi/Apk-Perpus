<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                        	<?php if(!empty($this->input->get('id'))){?>
                        	<h1 class="text-center">Edit Kategori</h1>
                        	<hr>
							<?php }else{?>
							<h1 class="text-center">Tambah Kategori</h1>
							<hr>
							<?php }?>
                            
                        </div>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="input-knob-dial-wrap">
                        	<div class="container-fluid">
                        		<div class="col-sm-4" >
	                        		<?php if(!empty($this->input->get('id'))){?>
									<form method="post" action="<?= base_url('data/katproses');?>">
										<div class="form-group">
										<label for="">Nama Kategori</label>
										<input type="text" name="kategori"  value="<?=$kat->nama_kategori;?>" id="kategori" class="form-control"  placeholder="Contoh : Pemrograman Web" >
										
										</div>
										<br/>
										<input type="hidden" name="edit" value="<?=$kat->id_kategori;?>">
										<button type="submit" class="btn btn-success widget-btn-1" style="margin-top: -15px;"><i class="fa fa-edit"></i> Edit Kategori</button>
									</form>
									<?php }else{?>
									<form method="post" action="<?= base_url('data/katproses');?>">
										<div class="form-group">
										<label for="">Nama Kategori</label>
										<input type="text" name="kategori" id="kategori" class="form-control" placeholder="Contoh : Pemrograman Web" required>
										
										</div>
										<br/>
										<input type="hidden" name="tambah" value="tambah">
										<button type="submit" class="btn btn-success widget-btn-1" style="margin-top: -15px;"> <i class="fa fa-plus"></i> Tambah Kategori</button>
									</form>
									<?php }?>
                        		</div>
                        		<div class="col-sm-8">
                        		<div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table2" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Kategori</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
									<?php $no=1;foreach($kategori->result_array() as $isi){?>
										<tr>
											<td><?= $no;?></td>
											<td><?= $isi['nama_kategori'];?></td>
											<td style="width:20%;">
												<a href="<?= base_url('data/kategori?id='.$isi['id_kategori']);?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
												<a href="<?= base_url('data/katproses?kat_id='.$isi['id_kategori']);?>" onclick="return confirm('Anda yakin Kategori ini akan dihapus ?');">
												<button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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
    </div>
</div>