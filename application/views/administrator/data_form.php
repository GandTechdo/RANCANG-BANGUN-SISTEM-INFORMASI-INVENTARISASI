<div class="container-fluid">
	<div class="alert alert-succes" role="alert">
		<i class="fas fa-university"></i> FORM TAMBAH DATA KOLEKSI
	</div>
	<br>
	
     <?php echo form_open_multipart('administrator/data/tambah_data_aksi')?>
     <form method="post" action="<?php echo base_url('administrator/data/tambah_data_aksi')?>">
     <div class="form-group">
      	<label>No Inventaris Koleksi</label>
         <input type="text" name="no_inv" placeholder="Masukan No Inventaris Koleksi" class="form-control">
			<?php echo form_error('no_inv', '<div class="text-denger small" ml-3>')?>
		</div>
        <div class="form_group">
			<label> Nama  Koleksi</label>
			<input type="text" name="nama_koleksi" placeholder="Masukan Nama Koleksi" class="form-control">
			<?php echo form_error('nama_koleksi', '<div class="text-denger small" ml-2>')?>
		</div>

		<div class="form_group">
			<label> jenis  Koleksi</label>
			<input type="text" name="jenis_koleksi" placeholder="Masukan Jenis Koleksi" class="form-control">
			<?php echo form_error('jenis_koleksi', '<div class="text-denger small" ml-2>')?>
		</div>	
			<div class="form_group">
			<label> Asal  Daerah</label>
			<input type="text" name="asal_daerah" placeholder="Masukan Nama Koleksi" class="form-control">
			<?php echo form_error('asal_daerah', '<div class="text-denger small" ml-2>')?>
		</div>
		<div class="form_group">
			<label> Perolehan </label>
			<input type="text" name="nama_koleksi" placeholder="Masukan Perolehan" class="form-control">
			<?php echo form_error('perolehan', '<div class="text-denger small" ml-2>')?>
		</div>

		<div class="form_group">
			<label> Tahun Perolehan</label>
			<input type="text" name="tahun_perolehan" placeholder="Masukan Tahun Perolehan" class="form-control">
			<?php echo form_error('jenis_koleksi', '<div class="text-denger small" ml-2>')?>
		</div>	
			<div class="form_group">
			<label> Ukuran </label>
			<input type="text" name="ukuran" placeholder="Masukan Ukuran" class="form-control">
			<?php echo form_error('asal_daerah', '<div class="text-denger small" ml-2>')?>


		<br><br>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<?php echo anchor('administrator/data','<div class="btn btn- btn-danger"> Kembali </div>')?>

</form>
	<?php form_close();?>

</div>