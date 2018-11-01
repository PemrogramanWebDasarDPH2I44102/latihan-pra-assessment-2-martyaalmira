<!DOCTYPE html>
<html>
<head>
	<title>Paket</title>
</head>
<body>
	<table>
	<form>
		<tr>
			<td>Tanggal datang</td>
			<td><input type="date" name="tgl_datang"></td>
		</tr>

		<tr>
			<td>Penerima</td>
			<td><input type="text" name="Penerima"></td>
		</tr>

		<tr>
			<td>Sasaran</td>
			<td><input type="text" name="Sasaran"></td>
		</tr>

		<tr>
			<td>Isi paket</td>
			<td><input type="text" name="isi_paket"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>


	</form>
</table>

</body>
</html>

<?php
if(isset($_POST['submit'])){
session_start();
$tgl_datang = $_POST['tgl_datang'];
$isi_paket = $_POST['isi'];
$data =mysqli_connect('localhost', 'root', '', 'apartemen');
$cek = mysqli_query($data,"INSERT INTO paket (tgl_datang,isi_paket) VALUES('$tgl_datang', $isi_paket)");

	if($cek){
		header("location:datapaket.php");
		echo "berhasil";
	}else{
		echo "Data gagal";
	}
}
  ?>