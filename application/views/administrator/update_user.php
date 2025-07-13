<div class="container-fluif">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-univerity"></i> FORM UPDATE DATA INVENTARIS KOLESKSI MUSEUM TEKSTIL
	</div>
	
    <?php foreach($user as $user):  ?>
    <br>
	<form method="post" action="<?php echo base_url('administrator/data/update_aksi')?>">

      <div class="form-group">
		<label >Nama Koleksi</label>
		<input type="text" name="nama_koleksi" class="form-control" value="<?php echo $data->nama_koleksi?> ">
		<?php echo form_error('no_inv','<div class="text-denger" ml-2> ')?>
		</div>
		<div class="form-group">
		<label>Jenis koleksi</label>
		<input type="text" name="jenis_koleksi" class="form-control"  value="<?php echo $data->jenis_koleksi?> ">
		<?php echo form_error('jenis_koleksi','<div class="text-denger" ml-2> ')?>
		</div>
		<div class="form-group">
		<label >Asal Daerah</label>
		<input type="text" name="asal_daerah" class="form-control" value="<?php echo $data->asal_daerah?> ">
		<?php echo form_error('asal_daerah','<div class="text-denger" ml-2>')?>
		</div>
		<div class="form-group">
		<label >Keterangan Tempat Penyimpanan</label>
		<input type="text" name="ket_tempat"  class="form-control" value="<?php echo $data->ket_tempat?> ">
		<?php echo form_error('ket_tempat','<div class="text-denger" ml-2>')?>
		</div>

		</div>
		<button type="submit" class="btn btn-primary">SIMPAN</button>
		<?php echo anchor('administrator/data','<div class="btn btn- btn-danger"> Kembali </div>')?>

	</form>
<?php endforeach;?>
</div>