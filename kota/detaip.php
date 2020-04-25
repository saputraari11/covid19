<?php 
include '../koneksi.php';
$id=$_GET["id"];
?>
<?php 
include '../asset/header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<div class="card">
  			  <div class="card-header">
			    <h2 class="card-title"><i class="fas fa-city text-danger"></i> Data kota </h2>
			  </div>
			  <div class="card-body">
			  	<table class="table table-white table-hover">
				  <thead class="bg-danger text-white">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Provinsi</th>
					  <th scope="col">ODP</th>
					  <th scope="col">PDP</th>
					  <th scope="col">OTG</th>
					 
				    </tr>
				  </thead>
				  <?php  
				  $no=1;
					  $sql=mysqli_query($connect,"SELECT * FROM tempat where id_provinsi=$id ");
					  while($a=mysqli_fetch_assoc($sql)):
						$n=$a['id_tempat'];
				  ?>
				  	<tr>
				      <th scope="row"><?=$no?></th>
				      <td><?=$a['kota']?></td>
					  <td><?php
					  $odp=mysqli_query($connect,"SELECT p.provinsi,COUNT(k.id_petugas) as odp FROM karantina k join tempat t USING(id_tempat) JOIN provinsi p USING(id_provinsi)where k.id_status=1 and t.id_tempat=$n ");
					  $odp=mysqli_fetch_assoc($odp);echo $odp["odp"];
					  ?></td>
					  <td><?php $pdp=mysqli_query($connect,"SELECT p.provinsi,COUNT(k.id_petugas) as pdp FROM karantina k join tempat t USING(id_tempat) JOIN provinsi p USING(id_provinsi)where k.id_status=2 and t.id_tempat=$n ");
					  $pdp=mysqli_fetch_assoc($pdp);echo $pdp["pdp"];?></td>
					  <td><?php $otp=mysqli_query($connect,"SELECT p.provinsi,COUNT(k.id_petugas) as otp FROM karantina k join tempat t USING(id_tempat) JOIN provinsi p USING(id_provinsi)where k.id_status=3 and t.id_tempat=$n");
					  $otp=mysqli_fetch_assoc($otp);echo $otp["otp"];?></td>
					  
					</tr>
				    <?php
				    	$no++;
				  	endwhile;
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