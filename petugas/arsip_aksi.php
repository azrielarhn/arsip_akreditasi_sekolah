<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s');
$petugas = $_SESSION['id'];
$nama_petugas = $_SESSION['nama'];
$kode  = $_POST['kode'];
$nama  = $_POST['nama'];
$rand = rand();

$filename = $_FILES['file']['name'];
$jenis = pathinfo($filename, PATHINFO_EXTENSION);

$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

$status = "Proses";
$description = Null;

if ($jenis == "php") {
	header("location:arsip.php?alert=gagal");
} else {
	move_uploaded_file($_FILES['file']['tmp_name'], '../arsip/' . $rand . '_' . $filename);
	$nama_file = $rand . '_' . $filename;
	mysqli_query($koneksi, "insert into arsip values (NULL,'$waktu','$petugas','$kode','$nama','$jenis','$kategori','$keterangan','$nama_file', '$status','$description')") or die(mysqli_error($koneksi));
	$id_arsip = mysqli_insert_id($koneksi);
	mysqli_query($koneksi, "insert into riwayat values (NULL,'$waktu','$petugas','$id_arsip', 'false', 'petugas', '$nama_petugas', 'menambahkan')") or die(mysqli_error($koneksi));
	header("location:arsip.php?alert=sukses");
}
