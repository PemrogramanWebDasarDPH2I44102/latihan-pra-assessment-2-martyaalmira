<!DOCTYPE html>
<html>
<head>
	<title>Create penghuni</title>
</head>
<body>
	<table>
	<form>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="namap"></td>
		</tr>

		<tr>
			<td>Unit</td>
			<td><input type="text" name="unit"></td>
		</tr>

		<tr>
			<td>No KTP</td>
			<td><input type="text" name="noktp"></td>
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
$namap = $_POST['namap'];
$unit = $_POST['unit'];
$noktp = $_POST['noktp'];

$data =mysqli_connect('localhost', 'root', '', 'apartemen');
$cek = mysqli_query($data,"INSERT INTO penghuni (namap,unit,noktp) VALUES('$namap', $unit, $noktp)");

	if($cek){
		//header("location:.php");
		echo "berhasil";
	}else{
		echo "gagal";
	}
}
?>