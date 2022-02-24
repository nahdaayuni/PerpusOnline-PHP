<?php
session_start();
 if($_SESSION['status_login']!=true){
 header('location: login.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous"> 
 <title></title>
</head>
<style>
#t01 {
      background-color: #1a8cff;
    }
#t02{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 30px;  
  font-weight: bold;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0073e6;">
   
 <div class="container-fluid" >
    <a class="navbar-brand" href="#" style="color: #ffffff;">PERPUS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page"
        href="home.php" style="color: #ffffff;">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page"
        href="buku.php" style="color: #ffffff;">Buku</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page"
        href="histori_peminjaman.php" style="color: #ffffff;">Transaksi</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page"
        href="logout.php" style="color: #ffffff;">Logout</a>
        </li>
        </ul>
    </div>
 </div>
 </nav>
 <div class="container bg-light rounded" style="margin-top:10px">
 </div>
 <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>