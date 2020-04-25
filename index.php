<?php
include 'koneksi.php';
$date = date("Y-m-d");
$odp=mysqli_query($connect,"SELECT COUNT(id_petugas) as odp FROM `karantina` WHERE id_status=1");
$pdp=mysqli_query($connect,"SELECT COUNT(id_petugas) as pdp FROM `karantina` WHERE id_status=2");
$jumlah=mysqli_query($connect,"SELECT COUNT(id_petugas) as jumlah FROM `karantina`");
$odp=mysqli_fetch_assoc($odp);
$pdp=mysqli_fetch_assoc($pdp);
$jumlah=mysqli_fetch_assoc($jumlah);
$odp=$odp["odp"];
$pdp=$pdp["pdp"];
$jumlah=$jumlah["jumlah"];
?>
<?php
include 'asset/header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md ml-3">
			<h2><i class="fas fa-chart-line mr-2"></i>Dashboard</h2>
			<hr class="bg-light">
		</div>
	</div>
	<div class="row ml-3">
		<div class="col-md-4 col-sm-4 col-lg-4">
			<div class="card bg-dark" style="width: 14rem;background-color:rgb(29, 41, 57);box-shadow: 1px 1px 5px black;">
				<div class="card-body text-white">
					<div class="row">
						<div class="col-md-3">
							<p style="font-size: 40px" class="mt-4"><i class="fas fa-book"></i></p>
						</div>
						<div class="col-md-8 ml-1">
							<h5 class="card-title" style="font-size: 13px">ODP</h5>
							<p class="card-text" style="font-size: 13px"><?= $odp ?></p>
							<a href="http://localhost/siperpus/buku/index.php" class="text-white">More >>> <i class="fas fa-angel-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-lg-4">
			<div class="card bgan" style="width: 14rem;background-color:rgb(8, 102, 198);box-shadow: 1px 1px 5px black;">
				<div class="card-body text-white">
					<div class="row">
						<div class="col-md-3">
							<p style="font-size: 40px" class="mt-4"><i class="fas fa-users"></i></p>
						</div>
						<div class="col-md-8 ml-3">
							<h5 class="card-title" style="font-size: 13px">PDP</h5>
							<p class="card-text" style="font-size: 13px"><?= $pdp ?></p>
							<a href="http://localhost/siperpus/anggota/index.php" class="text-white">More >>> <i class="fas fa-angel-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-4 col-lg-4">
			<div class="card" style="width: 14rem;background-color:rgb(221, 53, 68);box-shadow: 1px 1px 5px black;">
				<div class="card-body text-white">
					<div class="row">
						<div class="col-md-3">
							<p style="font-size: 40px" class="mt-4"><i class="fas fa-shopping-cart"></i></p>
						</div>
						<div class="col-md-8 ml-3">
							<h5 class="card-title" style="font-size: 13px">JUMLAH</h5>
							<p class="card-text" style="font-size: 13px"><?= $jumlah ?></p>
							<a href="http://localhost/siperpus/anggota/index.php" class="text-white">More >>> <i class="fas fa-angel-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	</div>



</div>
