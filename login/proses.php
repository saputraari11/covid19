<?php
session_start();
include "../koneksi.php";
if(isset($_POST["signup"])){
    $nama=$_POST["nama"];
    $user=$_POST["user"];
    $password=$_POST["password"];
   $sql= mysqli_query($connect,"INSERT INTO admin VALUES(' ','$nama','$user','$password')");
   $count=mysqli_affected_rows($connect);
    if($count>0){
        header("location:form-login.php");
    }
}
elseif(isset($_POST["signin"])){
    $user=$_POST["user"];
    $password=$_POST["password"];
    $sql= mysqli_query($connect,"SELECT id_admin, nama FROM admin where username='$user' AND password='$password'");
    $petugas=mysqli_fetch_assoc($sql);
    $count=mysqli_affected_rows($connect);
    if($count>0){
        $_SESSION["id"]=$petugas["id_petugas"];
        $_SESSION["nama"]=$petugas["nama"];
        header("location:http://localhost/adminc/index.php");
    }
    else{
        header("location:http://localhost/adminc/login/form-login.php");
    }
}
?>