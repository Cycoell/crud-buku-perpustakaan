<?php
include 'koneksi.php';

if (isset($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku'];

    // Query hapus data
    $query = "DELETE FROM tb_buku WHERE id_buku='$id_buku'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Jika berhasil, kembali ke halaman utama
        header("Location: indexcreate.php");
        exit;
    } else {
        echo "Gagal menghapus data!";
    }
} else {
    echo "ID Buku tidak ditemukan!";
}
?>
