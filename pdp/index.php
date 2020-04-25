 <?php 
include '../koneksi.php';

$odp=mysqli_query($connect,"SELECT u.id_petugas,u.nama,concat(p.provinsi,',',t.kota) as tempat FROM karantina k JOIN user u USING(id_petugas) join tempat t ON k.id_tempat=t.id_tempat JOIN provinsi p USING(id_provinsi) WHERE id_status=2 ");

?>
<?php 
include '../asset/header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<div class="card">
  			  <div class="card-header">
			    <h2 class="card-title"><i class="fas fa-hospital text-danger"></i> Data PDP </h2>
			  </div>
			  <div class="card-body">
			  	<table class="table table-white table-hover">
				  <thead class="bg-danger text-white">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nama</th>
				      <th scope="col">tempat</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <?php  
				  	$no = 1;
				  	while ($a=mysqli_fetch_assoc($odp)){?>
				  	<tr>
				      <th scope="row"><?=$no?></th>
				      <td><?=$a['nama']?></td>
				      <td><?=$a['tempat']?></td>
				      <td>
				      	<a href="detaip.php?id=<?= $a['id_petugas'];?>" class="badge badge-success">Detail</a>
						<a href="hapus.php?id=<?= $a['id_petguas'];?>" class="badge badge-danger">Hapus</a>
				      </td>
				    </tr>
				    <?php
				    	$no++;
				  	}
				  ?>
				  </tbody>
				</table>
			  </div>
			</div>
		</div>
	</div>
</div>


<?php 
include '../asset/footer.php';
?>