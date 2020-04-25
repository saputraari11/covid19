<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
  <script src="http://localhost/adminc/asset/jquery.js"></script>
  <link rel="stylesheet" href="http://localhost/adminc/asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/adminc/asset/all1.css">
  <link rel="stylesheet" href="http://localhost/adminc/asset/fontawesome/css/all.min.css">
  <title>SIPERPUS</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand ml-3 " >DATA COVID19</a>
    <button class="navbar-toggler mr-3" data-toggle="collapse" data-target="#menu">
      <span ><i class="fas fa-portrait"></i></span>
    </button>
   
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(255, 255, 255)">
    <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-3 mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav ">
        <a class="nav-item nav-link rit20" href="http://localhost/adminc/index.php"><i class="fas fa-tachometer-alt text-danger"></i> Dashboard</a>
        <a class="nav-item nav-link rit20" href="http://localhost/adminc/odp/index.php"><i class="fas fa-clipboard-list text-danger"></i> ODP</a>
        <a class="nav-item nav-link rit20" href="http://localhost/adminc/pdp/index.php"><i class="fas fa-user text-danger"></i> PDP</a>
        <a class="nav-item nav-link rit20" href="http://localhost/adminc/kota/index.php"><i class="fas fa-database text-danger"></i> Jumlah</a>
        <a class="nav-item nav-link " href="http://localhost/adminc/login/logout.php"><i class="fas fa-sign-out-alt text-danger"></i> Logout</a>
      </div>
    </div>
  </nav>
</body>
<body class="bg-light">
</html>