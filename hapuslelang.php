<?php
include 'koneksi.php';

// menyimpan data id kedalam variabel
$namalengkap = $_GET['namalengkap'];

// query SQL untuk delete data
$query = "DELETE from lelang where namalengkap='$namalengkap'";
mysqli_query($conn, $query);

// mengalihkan ke halaman tabel
header("location: tabel_tawar_vespa.php");
?>
