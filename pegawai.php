<!DOCTYPE html>
<html>
<head>
	<title>Karyawan</title>
</head>
<body>
	<table>
	<form>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="namak"></td>
		</tr>

		<tr>
			<td>NIP</td>
			<td><input type="text" name="nip"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="submit">

	</form>
</table>

</body>
</html>

<?php
if(isset($_POST['submit'])){
session_start();
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$data =mysqli_connect('localhost', 'root', '', 'apartemen');
$cek = mysqli_query($data,"INSERT INTO karyawan (nama,nip) VALUES('$nama', $nip)");

	if($cek){
		echo "berhasil";
	}else{
		echo "gagal";
	}
}
  ?>