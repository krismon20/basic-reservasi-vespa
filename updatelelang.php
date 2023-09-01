<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$nilailimit = $_POST ['nilailimit'];
$jaminan = $_POST['jaminan'];
$tanggal = $_POST['tanggal'];

// query SQL untuk update data
$sql="UPDATE lelang SET namalengkap='$namalengkap', email='$email', nilailimit='$nilailimit', jaminan= '$jaminan'  WHERE namalengkap='$namalengkap'";
mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert('Data dengan Nama Lengkap $namalengkap telah berhasil di update');document.location='tabel_tawar_vespa.php';</script>";

?>