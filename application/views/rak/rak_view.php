<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                        	<?php if(!empty($this->input->get('id'))){?>
                        	<h1 class="text-center">Edit Rak</h1>
                        	<hr>
							<?php }else{?>
							<h1 class="text-center">Tambah rak</h1>
							<hr>
							<?php }?>
                            
                        </div>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="input-knob-dial-wrap">
                        	<div class="container-fluid">
                        		<div class="col-sm-4" >
	                        		<?php if(!empty($this->input->get('id'))){?>
									<form method="post" action="<?= base_url('data/rakproses');?>">
										<div class="form-group">
										<label for="">Nama Rak / Lokasi</label>
										<input type="text" name="rak"  value="<?=$rak->nama_rak;?>" id="rak" class="form-control" placeholder="Contoh : Rak Buku 1" >
										
										</div>
										<br/>
										<input type="hidden" name="edit" value="<?=$rak->id_rak;?>">
										<button type="submit" class="btn btn-success widget-btn-1" style="margin-top: -15px;"><i class="fa fa-edit"></i> Edit Rak</button>
									</form>
									<?php }else{?>
										<form method="post" action="<?= base_url('data/rakproses');?>">
										<div class="form-group">
										<label for="">Nama Rak / Lokasi</label>
										<input type="text" name="rak" id="rak" class="form-control" placeholder="Contoh : Rak Buku 1" required>
										
										</div>
										<br/>
										<input type="hidden" name="tambah" value="tambah">
										<button type="submit" class="btn btn-success widget-btn-1" style="margin-top: -15px;"> <i class="fa fa-plus"></i> Tambah Rak</button>
									</form>
									<?php }?>
                        		</div>
                        		<div class="col-sm-8">
                        		<table id="table2" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Rak Buku</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1;foreach($rakbuku->result_array() as $isi){?>
											<tr>
												<td><?= $no;?></td>
												<td><?= $isi['nama_rak'];?></td>
												<td style="width:20%;">
													<a href="<?= base_url('data/rak?id='.$isi['id_rak']);?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
													<a href="<?= base_url('data/rakproses?rak_id='.$isi['id_rak']);?>" onclick="return confirm('Anda yakin Rak Buku ini akan dihapus ?');">
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