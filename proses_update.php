<?php
include 'koneksi.php';

if (isset($_POST['id_buku'])) {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $kategori = $_POST['kategori'];

    $query = "UPDATE tb_buku SET 
                judul_buku = '$judul_buku', 
                pengarang = '$pengarang', 
                tahun_terbit = '$tahun_terbit', 
                kategori = '$kategori' 
              WHERE id_buku = '$id_buku'";

    if (mysqli_query($conn, $query)) {
        header("Location: indexcreate.php");
        exit;
    } else {
        echo "Gagal update data! Error: " . mysqli_error($conn);
    }
} else {
    echo "Data tidak lengkap!";
}
?>
