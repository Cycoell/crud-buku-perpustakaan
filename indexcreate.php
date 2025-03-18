<?php 
include_once ("koneksi.php");
$query= "SELECT * FROM tb_buku";
$hasil= mysqli_query ($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
 <title>Koleksi Buku</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
 integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class="alert alert-success text-center" role="alert"> 
    <h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
 </div>

 <a href="tambahbuku.php" class="btn btn-primary mb-1 mt-1">Tambah Buku</a>

 <table class="table table-bordered">
 <thead class="thead-light">
   <tr>
     <th scope="col">Id_Buku</th>
     <th scope="col">Judul Buku</th>
     <th scope="col">Pengarang</th>
     <th scope="col">Tahun Terbit</th>
     <th scope="col">Kategori</th>
     <th scope="col">Aksi</th> <!-- Tambahan kolom Aksi -->
   </tr>
 </thead>
 <tbody>
 <?php while ($data = mysqli_fetch_array($hasil)) { ?>
   <tr>
     <th scope="row"><?php echo $data['id_buku']; ?></th>
     <td><?php echo $data['judul_buku']; ?></td>
     <td><?php echo $data['pengarang']; ?></td>
     <td><?php echo $data['tahun_terbit']; ?></td>
     <td><?php echo $data['kategori']; ?></td>
     <td>
        <!-- Tombol Edit -->
        <a href="updatebuku.php?id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <!-- Tombol Hapus -->
        <a href="hapusbuku.php?id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-danger"onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?');"> Hapus</a>
     </td>
   </tr>
 <?php } ?>
 </tbody>
 </table>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
