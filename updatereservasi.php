<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$namalengkap = $_POST['namalengkap'];
$nomortelepon = $_POST['nomortelepon'];
$alamatemail = $_POST['alamatemail'];
$aksesoris = $_POST['aksesoris'];
$tanggal = $_POST['tanggal'];

// query SQL untuk update data
$sql="UPDATE aksesoris SET namalengkap='$namalengkap', nomortelepon='$nomortelepon', alamatemail='$alamatemail', aksesoris='$aksesoris', tanggal= '$tanggal'  WHERE namalengkap='$namalengkap'";
mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert('Data dengan Nama Lengkap $namalengkap telah berhasil di update');document.location='tampilreservasi.php';</script>";

?>