<?php 
include '../koneksi.php';
$time=date('Y-m-d');
$id=$_GET["id"];
$query=mysqli_query($connect,"DELETE FROM karantina where id_petugas='$id' and tanggal='$time' ");
if(isset($query)){
    header("location: index.php");
    exit;
}
else{
    header("location : index.php");
    exit;
}
?>