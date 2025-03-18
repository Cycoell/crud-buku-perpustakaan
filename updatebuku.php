<?php
include 'koneksi.php';

if (isset($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku'];

    // Ambil data dari database
    $query = "SELECT * FROM tb_buku WHERE id_buku='$id_buku'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID Buku tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Edit Data Buku</h2>
    <form action="proses_update.php" method="POST">

        <!-- Kode Buku (Non-editable) -->
        <div class="form-group">
            <label for="id_buku">Kode Buku</label>
            <input type="text" class="form-control" id="id_buku" value="<?php echo $data['id_buku']; ?>" disabled>
            <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
        </div>

        <div class="form-group">
            <label for="judul_buku">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $data['judul_buku']; ?>" required>
        </div>

        <div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $data['pengarang']; ?>" required>
        </div>

        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>" required>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $data['kategori']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="indexcreate.php" class="btn btn-secondary">Batal</a>
    </form>
</div>

</body>
</html>
