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
      background-color: #e6f0ff;
}
</style>
<body id="t01">
    <div class="form-control"  id="t01">
 <br><h2 align="center"  id="t01">Pengisian Data Buku</h2><br>
 <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
 Nama Buku : 
 <input type="text" name="nama_buku" value="" class="form-control">
 Deskripsi : 
 <textarea name="deskripsi" value="" class="form-control" rows="4"></textarea>
Foto Buku : 
 <input type="file" name="file" value="" class="form-control"> <br>
<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
 </form>
</br>
 <a href="home.php" class="btn btn-danger">Batal</a>
</div>
 <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>