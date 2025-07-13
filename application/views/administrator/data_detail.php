<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fa fa-eye"></i>  Detail Data Koleksi Museum Tekstil
		</div>
		
		<table class="table table hover table-bordered table-striped">

		<?php foreach($detail as $dt): ?>

        <img class="mb-4" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width: 50%">
		<tr>
			<td>NO INV</td>
			<td><?php echo $dt->no_inv; ?></td>
		</tr>
		<tr>
			<td>Jenis Barang</td>
			<td><?php echo $dt->nama_koleksi; ?></td>
		</tr>
		<td>Jenis Koleksi</td>
		<td><?php echo $dt->jenis_koleksi; ?></td>
		</tr>
		<tr>
			<td>Asal Daerah</td>
			<td><?php echo $dt->asal_daerah; ?></td>
		</tr>
		<tr>
			<td> Perolehan</td>
			<td><?php echo $dt->perolehan; ?></td>
		</tr>
		<tr>
			<td>Tahun Perolehan</td>
			<td><?php echo $dt->tahun_perolehan; ?></td>
		<tr>
			<td>Ukuran </td>
			<td><?php echo $dt->ukuran; ?></td>
		<tr>
		<tr>
			<td>Ket Tempat </td>
			<td><?php echo $dt->ket_tempat; ?></td>
		<tr>


		</tr>
		</tr>
		<a class="btn btn-outline-secondary shadow float-right"  onclick="window.print()"> <i class="fa fa-print"></i> Print </a>
	<?php endforeach;?>
  </table>

  <?php echo anchor('administrator/data','<div class="btn btn- btn-danger"> Kembali </div>')?>
</div>