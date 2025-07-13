<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<tr>
		<th>NO</th>>
		<th>NO INV</th>
		<th>NAMA KOLEKSI</th>
		<th>JENIS KOLEKSI</th>
		<th>ASAL DAERAH</th>
	</tr>


	<?php
	$no= 1;
	foreach ($data as $dt); ?> 

	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $dt->no_inv?></td>
		<td><?php echo $dt->nama_koleksi?></td>
		<td><?php echo $dt->jenis_koleksi?></td>
		<td><?php echo $dt->asal_daerah?></td>

	</tr>

<?php endforeach; ?>

 </table>

 <script type="text/javascript">
 	ios.print();
 </script>

</body>
</html>