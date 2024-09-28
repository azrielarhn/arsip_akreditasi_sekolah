<?php
include '../koneksi.php';

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $status = "Terima";
    $description = $_POST['description'];

    mysqli_query($koneksi, "UPDATE arsip SET status='$status', deskripsi='$description' WHERE arsip_id='$id'") or die(mysqli_error($koneksi));
    header("location: arsip.php?alert=sukses");
} elseif (isset($_POST['reject'])) {
    $status = "Tolak";
    $description = $_POST['description'];

    mysqli_query($koneksi, "UPDATE arsip SET status='$status', deskripsi='$description' WHERE arsip_id='$id'") or die(mysqli_error($koneksi));
    header("location: arsip.php?alert=sukses");
}
