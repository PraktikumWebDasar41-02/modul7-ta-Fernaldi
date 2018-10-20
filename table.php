<a href="form.php"><button style="text-decoration: none">INPUT BARU</button></a>
<form method="POST">
<input type="text" name="cari"><button type="submit">Cari</button></input>
</form>



<?php 
include "1.php";
//$query=mysqli_query($konek, "SELECT * FROM t_angga");

if (isset($_POST['cari'])) {
	$cari = $_POST['cari'];
	$query=mysqli_query($konek, "SELECT * FROM t_angga WHERE NIM LIKE '%$cari%' ");
}
else{
	$query=mysqli_query($konek, "SELECT * FROM t_angga");

}
echo "<table border=2>";
echo "<th>Nama</th><th>NIM</th><th>Tgl_lahir</th><th>Jenis_kelamin</th><th>Program Studi</th><th>Fakultas</th><th>Asal</th><th>Moto Hidup</th><th>Aksi</th>";
while($satu = mysqli_fetch_array($query)){
echo "<br>";
echo "<tr>";
echo "<td>".$satu['Nama']."</td>";
echo "<td>".$satu['NIM']."</td>";
echo "<td>".$satu['Tgl_lahir']."</td>";
echo "<td>".$satu['Jenis_kelamin']."</td>";
echo "<td>".$satu['Program_studi']."</td>";
echo "<td>".$satu['Fakultas']."</td>";
echo "<td>".$satu['Asal']."</td>";
echo "<td>".$satu['Moto_hidup']."</td>";
echo "<td><a href=table.php?nim=".$satu['NIM']."><button>Delete</button></a><a href=edit.php?nim=".$satu['NIM']."><button>Edit</button></a></td>";
echo "</tr>";

}
echo "</table>";
if (isset($_GET['nim'])) {
	$nim = $_GET['nim'];
	$ku = mysqli_query($konek,"DELETE FROM `t_angga` WHERE NIM = $nim");
	if ($ku) {
		header("Location:table.php");
			}
}


?>