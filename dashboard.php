<?php
	include 'koneksi.php';
	$sql = mysqli_query($conn, "SELECT * FROM jurnal8_data");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 8</title>
</head>
<body>
	<center>
		<form>
			<table border="1" cellpadding="5">
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>NIM</th>
				<th>Kelas</th>
				<th>Hobi</th>
				<th>Genre Film</th>
				<th>Tempat Wisata</th>
				<th>Tanggal Lahir</th>

				<?php
					while ($data = mysqli_fetch_array($sql)) {
						echo "<tr>";
						echo"<td>".$data['namadepan']."</td>";
						echo"<td>".$data['namabelakang']."</td>";
						echo"<td>".$data['nim']."</td>";
						echo"<td>".$data['kelas']."</td>";
						echo"<td>".$data['hobi']."</td>";
						echo"<td>".$data['film']."</td>";
						echo"<td>".$data['wisata']."</td>";
						echo"<td>".$data['tgl_lahir']."</td>";
						//echo"<td><a href=delete.php?nim=".$data['nim']."> Hapus </a> || <a href=edit.php?nim".$data['nim']."> Edit </a></td>";
					}
				?>
			</table>
		</form>
	</center>
</body>
</html>