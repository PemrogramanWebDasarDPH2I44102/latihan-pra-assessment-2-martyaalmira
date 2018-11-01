<!DOCTYPE html>
<html>
<head>
	<title>Data Paket</title>
</head>
<body>
	<table>
	<tr>
		<th>Tanggal datang</th>
		<th>Sasaran</th>
		<th>Penerima</th>
		<th>Isi paket</th>
	</tr>

	<tr>
		<?php 
			while ($data = mysqli_fetch_array($sql)){
					echo"<tr>";
					echo"<td>".$data['tgl_datang']."</td>";
					echo"<td>".$data['Sasaran']."</td>";
					echo"<td>".$data['Penerima']."</td>";
					echo"<td>".$data['isi_paket']."</td>";
				}
				?>
	</tr>


	</table>

</body>
</html>