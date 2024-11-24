<?php $this->load->view('layouts/header_admin'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Data Alternatif</h1>

	<a href="<?= base_url('Alternatif'); ?>" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		<span class="text">Kembali</span>
	</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success"><i class="fas fa-fw fa-edit"></i> Edit Data Alternatif</h6>
    </div>
	
	<?php echo form_open('Alternatif/update/'.$alternatif->id_alternatif); ?>
		<div class="card-body">
			<div class="row">
				<?php echo form_hidden('id_alternatif', $alternatif->id_alternatif) ?>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Merk</label>
					<select name="keterangan" class="form-control" required>
						<option value="">--Merk--</option>
						<option value="Asus" <?php if($alternatif->keterangan == "Asus"){ echo 'selected'; } ?>>Asus</option>
						<option value="Lenovo" <?php if($alternatif->keterangan == "Lenovo"){ echo 'selected'; } ?>>Lenovo</option>
						<option value="Acer" <?php if($alternatif->keterangan == "Acer"){ echo 'selected'; } ?>>Acer</option>
						<option value="HP" <?php if($alternatif->keterangan == "HP"){ echo 'selected'; } ?>>HP</option>
						<option value="Axioo" <?php if($alternatif->keterangan == "Axioo"){ echo 'selected'; } ?>>Axioo</option>						
					</select>
				</div>

				<div class="form-group col-md-6">
					<label class="font-weight-bold">Tahun</label>
					<input autocomplete="off" type="text" name="tahun" value="<?php echo $alternatif->tahun ?>" required class="form-control"/>
				</div>

				<div class="form-group col-md-6">
					<label class="font-weight-bold">Windows</label>
					<select name="nik" class="form-control" required>
						<option value="">--Windows--</option>
						<option value="10" <?php if($alternatif->keterangan == "10"){ echo 'selected'; } ?>>10</option>
						<option value="11" <?php if($alternatif->keterangan == "11"){ echo 'selected'; } ?>>11</option>
						<option value="12" <?php if($alternatif->keterangan == "12"){ echo 'selected'; } ?>>12</option>						
					</select>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Processor</label>
					<input autocomplete="off" type="text" name="nama" value="<?php echo $alternatif->nama ?>" required class="form-control"/>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">RAM</label>
					<select name="jenis_kelamin" class="form-control" required>
						<option value="">--RAM--</option>
						<option value="4" <?php if($alternatif->jenis_kelamin == "4"){ echo 'selected'; } ?>>4GB</option>
						<option value="8" <?php if($alternatif->jenis_kelamin == "8"){ echo 'selected'; } ?>>8GB</option>
						<option value="16" <?php if($alternatif->jenis_kelamin == "16"){ echo 'selected'; } ?>>16GB</option>						
					</select>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Storage</label>
					<select name="departemen" class="form-control" required>
					<option value="">--Storage--</option>
						<option value="128" <?php if($alternatif->jenis_kelamin == "128"){ echo 'selected'; } ?>>128GB</option>
						<option value="256" <?php if($alternatif->jenis_kelamin == "256"){ echo 'selected'; } ?>>256GB</option>
						<option value="512" <?php if($alternatif->jenis_kelamin == "512"){ echo 'selected'; } ?>>512GB</option>		
					</select>
				</div>
				
				<div class="form-group col-md-6">
				<label class="font-weight-bold">Baterai</label>
				<select name="email" class="form-control" required>
					<option value="">--Baterai--</option>
						<option value="3500" <?php if($alternatif->jenis_kelamin == "3500"){ echo 'selected'; } ?>>3500MaH</option>
						<option value="5000" <?php if($alternatif->jenis_kelamin == "5000"){ echo 'selected'; } ?>>5000MaH</option>
						<option value="8000" <?php if($alternatif->jenis_kelamin == "8000"){ echo 'selected'; } ?>>8000MaH</option>
						<option value="10000" <?php if($alternatif->jenis_kelamin == "10000"){ echo 'selected'; } ?>>10000MaH</option>	
					</select>
				</div>
				
				<div class="form-group col-md-6">
				<label class="font-weight-bold">VGA</label>
				<select name="no_telp" class="form-control" required>
					<option value="">--VGA--</option>
						<option value="1" <?php if($alternatif->jenis_kelamin == "1"){ echo 'selected'; } ?>>NVIDIA</option>
						<option value="2" <?php if($alternatif->jenis_kelamin == "2"){ echo 'selected'; } ?>>GTX Force</option>
						<option value="3" <?php if($alternatif->jenis_kelamin == "3"){ echo 'selected'; } ?>>XFX</option>
						<option value="4" <?php if($alternatif->jenis_kelamin == "4"){ echo 'selected'; } ?>>AISURIX</option>	
					</select>
				</div>
				
				<div class="form-group col-md-12">
				<label class="font-weight-bold">LCD</label>
				<select name="alamat" class="form-control" required>
					<option value="">--LCD--</option>
						<option value="1" <?php if($alternatif->jenis_kelamin == "1"){ echo 'selected'; } ?>>FULL HD</option>
						<option value="2" <?php if($alternatif->jenis_kelamin == "2"){ echo 'selected'; } ?>>SRGB 100%</option>
						<option value="3" <?php if($alternatif->jenis_kelamin == "3"){ echo 'selected'; } ?>>IPS</option>
					</select>
				</div>
			</div>
		</div>
		<div class="card-footer text-right">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i> Reset</button>
        </div>
	<?php echo form_close() ?>
</div>

<?php $this->load->view('layouts/footer_admin'); ?>