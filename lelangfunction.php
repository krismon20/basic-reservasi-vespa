<?php

function simpanbarang(){
    require("koneksi.php");
    $namalengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $nilailimit = $_POST ['nilailimit'];
    $jaminan = $_POST['jaminan'];
    $tanggal = $_POST['tanggal'];
    
    if ($namalengkap != '') {
        $sql = "INSERT INTO lelang (namalengkap, email, nilailimit, jaminan, tanggal) VALUES ('$namalengkap', '$email', '$nilailimit', $jaminan, '$tanggal')";
        $hasil = mysqli_query($conn, $sql);
        echo "Penawaran telah ditambahkan";
    } else {
        echo "Nama Lengkap dan Email Tidak Boleh Kosong";
    }
}

function updatebarang($id){
    require 'koneksi.php';
    // menyimpan data kedalam variabel
    $namalengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $nilailimit = $_POST ['nilailimit'];
    $jaminan = $_POST['jaminan'];
    $tanggal = $_POST['tanggal'];
    
    //query SQL untuk update data
    $sql = "UPDATE lelang SET namalengkap='$namalengkap', email='$email', nilailimit='$nilailimit',jaminan='$jaminan', tanggal='$tanggal' WHERE namalengkap='$namalengkap'";
    mysqli_query($conn, $sql);

    echo "<script type='text/javascript'>alert('Penawar atas Nama $namalengkap telah berhasil diupdate'); document.location='tabel_tawar_vespa.php';</script>";
}


?>