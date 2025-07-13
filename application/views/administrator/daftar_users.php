<div clas="container-fluid">
	
	<divc class="alert-success" role="alert">
	<i class="fas fa-university"></i> DAFTAR USERS
	</div>	
	<br>

	<?php echo $this->session->flashdata('pesan'); ?>

	<?php echo anchor('administrator/user/tambah_user','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Users</button>') ?>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>NO</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>LEVEL</th>
			<th>BLOKIR</th>
			<th collspan="3">AKSI</th>
		</tr>

		<?php 
		$no=1;

		foreach ($user as $user) : ?>

			<tr>
				<td> <?php echo $no++ ?></td>
				<td> <?php echo $user->username ?></td>
				<td> <?php echo $user->password ?></td>
				<td> <?php echo $user->email ?></td>
				<td> <?php echo $user->level ?></td>
				<td> <?php echo $user->blocker ?></td>
				<td width="20px"><?php echo anchor('administrator/user/update/' .$user->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>')?> 
			</td>
			<td onclick="javascript: return confirm('Anda Yakin Hapus')"><?php echo anchor('administrator/user/hapus/' .$user->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>')?> 
			</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>