<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                        	<?php if(!empty($this->input->get('id'))){?>
                        	<h1 class="text-center">Edit Harga Denda</h1>
                        	<hr>
							<?php }else{?>
							<h1 class="text-center">Tambah Harga Denda</h1>
							<hr>
							<?php }?>
                            
                        </div>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="input-knob-dial-wrap">
                        	<div class="container-fluid">
                        		<div class="col-sm-4" >
	                        		<?php if(!empty($this->input->get('id'))){?>
									<form method="post" action="<?= base_url('transaksi/dendaproses');?>">
										<div class="form-group">
										<label for="">Harga Denda</label>
											<input type="number" name="harga"  value="<?=$den->harga_denda;?>" class="form-control" placeholder="Contoh : 10000" >
										
										</div>
										<div class="form-group">
											<label for="">Status</label>
											<select class="form-control" name="status">
												<option <?php if($den->stat == 'Aktif'){echo 'selected';}?>>Aktif</option>
												<option <?php if($den->stat == 'Tidak Aktif'){echo 'selected';}?>>Tidak Aktif</option>
											</select>
										</div>
										<br/>
										<input type="hidden" name="edit" value="<?=$den->id_biaya_denda;?>">
										<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Harga Denda</button>
									</form>
									<?php }else{?>

									<form method="post" action="<?= base_url('transaksi/dendaproses');?>">
										<div class="form-group">
										<label for="">Harga Denda</label>
											<input type="number" name="harga" class="form-control" placeholder="Contoh : 10000" required>
										</div>
										<br/>
										<input type="hidden" name="tambah" value="tambah">
										<button type="submit" class="btn btn-success widget-btn-1" style="margin-top: -20px;"> <i class="fa fa-plus"></i> Tambah Harga Denda</button>
									</form>
									<?php }?>
                        		</div>
                        		<div class="col-sm-8">
                        		<table id="table2" class="table table-bordered table-striped table" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Harga Denda</th>
										<th>Status</th>
										<th>Mulai Tanggal</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php $no=1;foreach($denda->result_array() as $isi){?>
									<tr>
										<td><?= $no;?></td>
										<td><?= $isi['harga_denda'];?></td>
										<td><?= $isi['stat'];?></td>
										<td><?= $isi['tgl_tetap'];?></td>
										<td style="width:20%;">
											<a href="<?= base_url('transaksi/denda?id='.$isi['id_biaya_denda']);?>"><button class="btn btn-warning widget-btn-3"><i class="fa fa-edit"></i></button></a>
											<?php if($isi['stat'] == 'Aktif'){?>
											<button class="btn btn-info widget-btn-2"><i class="fa fa-ban"></i></button>
											<?php }else{?>
											<a href="<?= base_url('transaksi/dendaproses?denda_id='.$isi['id_biaya_denda']);?>" onclick="return confirm('Anda yakin Biaya denda ini akan dihapus ?');">
											<button class="btn btn-danger widget-btn-4"><i class="fa fa-trash"></i></button></a>
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
    </div>
</div>