<div class="container-fluid">


	<div class="alert alert-success" role="alert">
		<i class="fa fa-university"></i> Data Koleksi Museum Tekstil
	</div>
	
	<?php echo $this->session->flashdata('pesan')?>

	<?php echo anchor('administrator/data/tambah_data','<button class="btn btn-sm btn-primary  mb-3"><i class="fa fa-plus fa-sm"></i>Tambah Data </button>') ?> 
	<a class="btn btn-outline-secondary shadow float-right mb-3"  onclick="window.print()">  <i class="fa fa-print"></i> Print </a>
	<br>
  
	<div class="navbar-form navbar-right"> <?php echo form_open('administrator/data/search')?>
		<input type="text" name="keyword" class="form-control" placeholder="search">
		<br>
		<button type="submit" class="btn btn-success mb-4">Cari</button>

		<?php echo form_close()?>

		


	<table class="table table-striped table-hover table-bordered">
		<tr>
			<th>NO</th>
			<th>NO INV</th>
			<th>NAMA KOLEKSI</th>
			<th>JENIS KOLEKSI</th>
			<th>ASAL DAERAH</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php 
         
        $no=1;
        foreach($data as $dt) : ?>


        <tr>
        	<td><?php echo $no++ ?></td>
            <td><?php echo $dt->no_inv ?></td>
             <td><?php echo $dt->nama_koleksi ?></td>
             <td><?php echo $dt->jenis_koleksi ?></td>
             <td><?php echo $dt->asal_daerah ?></td>
             <td><?php echo anchor('administrator/data/detail/'.$dt->id,'<div class="btn btn-sm btn-info"><i class "fa fa-eye" ></i></div>')?></td>
            <td><?php echo anchor('administrator/data/update/'.$dt->id, '<div class=""btn btn-sm btn-primary"><i class="fa fa-edit"></i></td>')?></td>
            <td onclick="javascript: return confirm('Anda Yakin Hapus')"><?php echo anchor('administrator/data/hapus/'.$dt->id,'<div class=""btn btn-danger"><i class="fa fa-trash"></i></td>')?></td>

        </tr>

         <?php endforeach; ?>
	</table>
</div>