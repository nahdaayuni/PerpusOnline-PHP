<?php
 include "header.php";
?>
</br>
</br>
<h1 align="center">DAFTAR BUKU</h1>
</br>
</br>
<style>
div.img {
  width: auto;
  height: auto;
}
body {
  background-color: #e6f3ff;
}
h1{
  font-family: Arial, sans-serif;
  font-size: 38px;  
  font-weight: bold;

}
</style>
<body>
<div class="row">
 <?php
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
 ?>
 <div class="col-md-3">
 <div class="card" >
 <img src="images/<?=$dt_buku['foto_buku']?>"
    class="card-img-top" width="600" height="350">
 <div class="card-body">
 <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
 <p class="card-text"><?=substr($dt_buku['deskripsi'],
0,20)?></p>
 <a
href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
 </div>
 </div>
 </div>
 <?php
 }
 ?>
</div>
</body>
 