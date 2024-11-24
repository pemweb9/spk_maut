<?php $this->load->view('layouts/header_admin'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Data Alternatif</h1>

	<a href="<?= base_url('Alternatif'); ?>" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		<span class="text">Kembali</span>
	</a>
</div>

<?= $this->session->flashdata('message'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success"><i class="fas fa-fw fa-plus"></i> Tambah Data Alternatif</h6>
    </div>
	
	<?php echo form_open('Alternatif/store'); ?>
		<div class="card-body">
			<div class="row">
			<div class="form-group col-md-6">
					<label class="font-weight-bold">Merk Laptop</label>
					<select name="keterangan" class="form-control" required>
						<option value="">--Merk Laptop--</option>
						<option value="Asus">Asus</option>
						<option value="Lenovo">Lenovo</option>
						<option value="Acer">Acer</option>
						<option value="HP">HP</option>
						<option value="Axioo">Axioo</option>					
					</select>
				</div>

				<div class="form-group col-md-6">
					<label class="font-weight-bold">Tahun</label>
					<input autocomplete="off" type="text" name="tahun" required class="form-control"/>
				</div>

				<div class="form-group col-md-6">
					<label class="font-weight-bold">Windows</label>
					<select name="nik" class="form-control" required>
						<option value="">--Windows--</option>
						<option value="10">10</option>					
						<option value="11">11</option>					
						<option value="12">12</option>					
					</select>
				</div>
				
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Processor</label>
					<input autocomplete="off" type="text" name="nama" required class="form-control"/>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">RAM</label>
					<select name="jenis_kelamin" class="form-control" required>
						<option value="">--RAM--</option>
						<option value="4GB">4GB</option>
						<option value="8GB">8GB</option>
						<option value="12GB">12GB</option>					
					</select>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Storage</label>
					<select name="departemen" class="form-control" required>
						<option value="">--Storage--</option>
						<option value="128GB">128GB</option>					
						<option value="256GB">256GB</option>					
						<option value="512GB">512GB</option>					
					</select>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Baterai</label>
					<select name="email" class="form-control" required>
						<option value="">--Baterai--</option>
						<option value="3500MaH">3500MaH</option>					
						<option value="5000MaH">5000MaH</option>					
						<option value="8000MaH">8000MaH</option>
						<option value="10000MaH">10000MaH</option>					
					</select>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">VGA</label>
					<select name="no_telp" class="form-control" required>
						<option value="">--VGA--</option>
						<option value="NVIDIA">NVIDIA</option>					
						<option value="GTX Force">GTX Force</option>					
						<option value="XFX">XFX</option>
						<option value="AISURIX">AISURIX</option>					
					</select>
				</div>

				<div class="form-group col-md-12">
					<label class="font-weight-bold">LCD</label>
					<select name="alamat" class="form-control" required>
						<option value="">--LCD--</option>
						<option value="FUKK HD">FULL HD</option>					
						<option value="SRGB 100%">SRGB 100%</option>					
						<option value="IPS">IPS</option>					
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