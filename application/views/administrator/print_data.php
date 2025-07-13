<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Data Koleksi Museum Tekstil Jakarta </title>
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
	foreach ($data as $data); ?> 

	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $data->NO_INV?></td>
		<td><?php echo $data->NAMA_KOLEKSI?></td>
		<td><?php echo $data->JENIS_KOLEKSI?></td>
		<td><?php echo $data->ASAL_DAERAH?></td>

	</tr>

<?php endforeach; ?>

 </table>

 <script type="text/javascript">
 	window.print();
 </script>

</body>
</html>