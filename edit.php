<?php 

include "1.php";


if (isset($_GET['nim'])) {
	$nem = $_GET['nim'];
	$q = mysqli_query($konek,"SELECT * FROM t_angga WHERE NIM=$nem");
	while ($satu = mysqli_fetch_array($q)) {
		
	
?>
<form method="POST" >
		<table>
			<tr>
				<td>Nama	:</td>
				<td><input type="text" name="nama" value=	<?php echo $satu['Nama'] ?>></td>
			</tr>
			<tr>
				<td>NIM		:</td>
				<td><input type="number" name="nim"  value=	<?php echo $satu['NIM'] ?>></td>
			</tr>
			<tr>
				<td>Tanggal Lahir	:</td>
				<td><input type="date" name="tgl_lahir" value=	<?php echo $satu['Tgl_lahir'] ?>></td>
			</tr>
			<tr>
				<td>Jenis Kelamin	:</td>
				<td><select name="jk">
					<option value="Laki-Laki" <?php echo ($satu['Jenis_kelamin']=="Laki-Laki")?'selected':''  ?>>Laki-Laki</option>
					<option value="Perempuan" <?php echo ($satu['Jenis_kelamin']=="Perempuan")?'selected':''  ?>>Perempuan</option>
				</select></td>
			</tr>
			<tr>
				<td>Program Studi	:</td>
				<td><select name="ps">
					<option value="Manajemen Informatika" <?php echo ($satu['Program_studi']=="Manajemen Informatika")?'selected':''  ?>>Manajemen Informatika</option>
					<option value="Teknik Informatika" <?php echo ($satu['Program_studi']=="Teknik Informatika")?'selected':''  ?>>Teknik Informatika</option>
					<option value="Sistem Informasi" <?php echo ($satu['Program_studi']=="Sistem Informasi")?'selected':''  ?>>Sistem Informasi</option>
				</select></td>
			</tr>
			<tr>
				<td>Fakultas	:</td>
				<td><input type="radio" name="fakultas" value="FIT" <?php echo ($satu['Fakultas']=="FIT")?'checked':''  ?>>FIT</td>
				<td><input type="radio" name="fakultas" value="FRI" <?php echo ($satu['Fakultas']=="FRI")?'checked':''  ?>>FRI</td>
				<td><input type="radio" name="fakultas" value="FTE" <?php echo ($satu['Fakultas']=="FTE")?'checked':''  ?>>FTE</td>
				<td><input type="radio" name="fakultas" value="FKB" <?php echo ($satu['Fakultas']=="FKB")?'checked':''  ?>>FKB
				</td>
			</tr>
			<tr>
				<td>Asal 	:</td>
				<td><input type="text" name="asal" value=	<?php echo $satu['Asal'] ?>></td>
			</tr>
			<tr>
				<td>Moto Hidup	:</td>
				<td><input type="text" name="moto" value=	<?php echo $satu['Moto_hidup'] ?>></td>
			</tr>
			<tr>
				<td><input type="submit" name="send" value="send"><button style="text-decoration: none"><a href="table.php">view</a></button></td>
			</tr>
		</table>	
	</form>

	<?php  
		}
		if (isset($_POST['send'])) {
	$nama = $_POST['nama'];

	
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk	= $_POST['jk'];
	$ps = $_POST['ps'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];

$nem = $_GET['nim'];
	$query = mysqli_query($konek,"UPDATE t_angga SET Nama='$nama',Tgl_lahir='$tgl_lahir',Jenis_kelamin='$jk',Program_studi='$ps',Fakultas='$fakultas',Asal='$asal',Moto_hidup='$moto' WHERE NIM='$nem'");
		if ($query) {
			header("Location:table.php");
		}else{
			echo "Error";
		}
}
}
	 ?>