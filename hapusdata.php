<?php
include 'koneksi.php';

// menyimpan data id kedalam variabel
$namalengkap = $_GET['namalengkap'];

// query SQL untuk delete data
$query = "DELETE from aksesoris where namalengkap='$namalengkap'";
mysqli_query($conn, $query);

// mengalihkan ke halaman tabel
header("location: tampilreservasi.php");
?>
