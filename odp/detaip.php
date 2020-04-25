<?php  
include '../asset/header.php';
include '../koneksi.php';

$id=$_GET["id"];
$query=mysqli_query($connect,"SELECT u.nama as nama,s.nama as status,j.jenis as jenis,k.suhu,concat(t.kota,',',p.provinsi) as tempat,k.keterangan,k.tanggal from karantina k join status s USING(id_status) join jenis j using(id_jenis) join tempat t USING(id_tempat) join provinsi p USING(id_provinsi) JOIN user u USING(id_petugas) where id_petugas=$id ");
$s=mysqli_fetch_assoc($query);
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Anggota</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
            <tr>
					<td><strong>Nama</strong></td>
					<td><?= $s['nama']?></td>
                </tr>
                <tr>
					<td><strong>Status</strong></td>
					<td><?= $s['status']?></td>
				</tr>
				<tr>
					<td><strong>Jenis</strong></td>
					<td><?= $s['jenis']?></td>
				</tr>
				<tr>
					<td><strong>Suhu</strong></td>
					<td><?= $s['suhu']?></td>
				</tr>
				<tr>
					<td><strong>Tempat</strong></td>
					<td><?= $s['tempat']?></td>
				</tr>
				
				
			
			</table>
		</div>
	</div>
</div>

<?php  
include '../asset/footer.php';
?>