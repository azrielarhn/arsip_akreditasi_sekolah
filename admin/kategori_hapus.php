<?php
include '../koneksi.php';
$id = $_GET['id'];

// hapus file lama
$lama = mysqli_query($koneksi, "select * from kategori where kategori_id='$id'");
$l = mysqli_fetch_assoc($lama);
$nama_file_lama = $l['kategori_id'];
unlink("../kategori/" . $nama_file_lama);

$data = mysqli_query($koneksi, "select * from kategori where kategori_id='$id'");
mysqli_query($koneksi, "delete from kategori where kategori_id='$id'");
header("location:kategori.php");
