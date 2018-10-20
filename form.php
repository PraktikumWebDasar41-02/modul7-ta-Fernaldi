<?php 
include "1.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>

	<form method="POST" >
		<table>
			<tr>
				<td>Nama	:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM		:</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir	:</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin	:</td>
				<td><select name="jk">
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select></td>
			</tr>
			<tr>
				<td>Program Studi	:</td>
				<td><select name="ps">
					<option value="Manajemen Informatika">Manajemen Informatika</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Sistem Informasi">Sistem Informasi</option>
				</select></td>
			</tr>
			<tr>
				<td>Fakultas	:</td>
				<td><input type="radio" name="fakultas" value="FIT">FIT</td>
				<td><input type="radio" name="fakultas" value="FRI">FRI</td>
				<td><input type="radio" name="fakultas" value="FTE">FTE</td>
				<td><input type="radio" name="fakultas" value="FKB">FKB
				</td>
			</tr>
			<tr>
				<td>Asal 	:</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Moto Hidup	:</td>
				<td><input type="text" name="moto"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Send"><button style="text-decoration: none"><a href="table.php">view</a></button></td>
			</tr>
		</table>	
	</form>

</body>
</html>

<?php 
include "1.php";
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	if(is_numeric($_POST['nim'])){
		$nim = $_POST['nim'];
	}
	
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk	= $_POST['jk'];
	$ps = $_POST['ps'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];


	if (isset($nim)) {
	$query=mysqli_query($konek,"INSERT INTO `t_angga`(`Nama`, `NIM`, `Tgl_lahir`, `Jenis_kelamin`, `Program_studi`, `Fakultas`, `Asal`, `Moto_hidup`) VALUES ('$nama','$nim','$tgl_lahir','$jk','$ps','$fakultas','$asal','$moto')");
	if($query){
		echo "<h1>Berhasil</h1>";
	}
	else{
		echo "Gagal!";
	}
	}
	
}
?>