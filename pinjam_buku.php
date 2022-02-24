<?php
 include "header.php";
 include "koneksi.php";
 $qry_detail_buku=mysqli_query($conn,"select * from buku where id_buku = '".$_GET['id_buku']."'");
 $dt_buku=mysqli_fetch_array($qry_detail_buku);
?>
<style>
body {
  background-color: #e6f3ff;
}
</style>
</br>
<h1 align="center">Pinjam Buku</h1>
</br>
</br>
<div class="row" >
 <div class="col-md-4">
 <img src="images/<?=$dt_buku['foto_buku']?>"
class="card-img-top" hspace="15" width="100" height="490">
 </div>
 <div class="col-md-8">
 <form
action="masukkankeranjang.php?id_buku=<?=$dt_buku['id_buku']?>"
method="post">
 <table class="table table-hover table-striped">
 <thead>
 <tr>
 <td style="font-weight: bold;">Nama Buku</td><td><?=$dt_buku['nama_buku']?></td>
 </tr>
<tr>
 
<td style="font-weight: bold;">Deskripsi</td><td><?=$dt_buku['deskripsi']?></td>
 </tr>
<tr>
 <td style="font-weight: bold;">Jumlah Pinjam</td><td><input type="number" name="jumlah_pinjam" value="1"></td>
 </tr>
<tr>
 <td colspan="2" ><input  class="btn btn-success" type="submit" value="PINJAM" style="background-color:#0073e6;"></td>
 </tr>
 </thead>
 </table>
 </form>
 </div>
</div>
