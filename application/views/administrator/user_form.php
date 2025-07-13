<div clas="container-fluid">
	
	<divc class="alert-success" role="alert">
	<i class="fas fa-university"></i> FORM TAMBAH USERS
	</div>	
 <form method="post" action="<?php echo base_url('administrator/user/tambah_users_aksi')?>">
 	<div class="form-group">
 		<label>username</label>
 		<input type="text" name="username" placeholder="Masukan Username" class="form-control">
 		<?php echo form_error('username', '<div class="text-denger small" ml-3)')?>
 	</div>

<div class="form-group">
 		<label>Password</label>
 		<input type="text" name="password" placeholder="Masukan Password" class="form-control">
 		<?php echo form_error('password', '<div class="text-denger small" ml-3)')?>
 	</div>
 	
 	<div class="form-group">
 		<label>Email</label>
 		<input type="text" name="email" placeholder="Masukan Email" class="form-control">
 		<?php echo form_error('email', '<div class="text-denger small" ml-3)')?>
 	</div>
 	<div class="form-group">
 		<label>LEVEL</label>
 		<select name="level" class="form-control">
 			<?php 
 			if ($level == 'admin'){
 			?>	
 			<option value="admin" selecte>Admin</option>
 			<option value="pjlp">Pjlp</option>
 			<?php 
 		} elseif ($level == 'pjlp'){
 			?>
 			<option value="admin">admin</option>
 			<option value="pjlp" selected>pjlp</option>
 		<?php 
 	}else
 	?>
 	<option value="admin">admin</option>
 			<option value="pjlp" >pjlp</option>
 		<?php }?>
 		</select>
 		<?php echo base_url('level','<div class="text-denger small" ml-3>')?></div>

 		<div class="form-group">
 		<label>Bloker</label>
 		<select name="bloker" class="form-control">
 			<?php 
 			if ($bloker == 'y'){
 			?>	
 			<option value="Y" selected>ya</option>
 			<option value="n">tidak</option>
 			<?php 
 		} elseif ($bloker == 'n'){
 			?>
 			<option value="y">ya</option>
 			<option value="n" selected>tidak</option>
 		<?php 
 	}else
 	?>
 	<option value="y">ya</option>
 			<option value="n" > tidak</option>
 		<?php }?>
 		</select>
 		<?php echo base_url('bloker','<div class="text-denger small" ml-3>')?></div>

 		<button type="submit" class="btn btn-primary">Simpan</button>
 </form>
</div>