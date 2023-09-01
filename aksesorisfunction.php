<?php

function simpanbarang(){
    require("koneksi.php");
    $namalengkap = $_POST['namalengkap'];
    $nomortelepon = $_POST['nomortelepon'];
    $alamatemail = $_POST['alamatemail'];
    $aksesoris = $_POST['aksesoris'];
    $tanggal = $_POST['tanggal'];
    
    if ($namalengkap != '') {
        $sql = "INSERT INTO aksesoris (namalengkap, nomortelepon, alamatemail, aksesoris, tanggal) VALUES ('$namalengkap', '$nomortelepon', '$alamatemail', '$aksesoris', '$tanggal')";
        $hasil = mysqli_query($conn, $sql);
        echo "Data telah ditambahkan";
    } else {
        echo "Nama Lengkap Tidak Boleh Kosong";
    }
}

function updatebarang($id){
    require 'koneksi.php';
    // menyimpan data kedalam variabel
    $namalengkap = $_POST['namalengkap'];
    $nomortelepon = $_POST['nomortelepon'];
    $alamatemail = $_POST['alamatemail'];
    $aksesoris = $_POST['aksesoris'];
    $tanggal = $_POST['tanggal'];

    //query SQL untuk update data
    $sql = "UPDATE aksesoris SET namalengkap='$namalengkap', nomortelepon='$nomortelepon', alamatemail='$alamatemail', aksesoris='$aksesoris', tanggal='$tanggal' WHERE namalengkap='$namalengkap'";
    mysqli_query($conn, $sql);

    echo "<script type='text/javascript'>alert('Data atas Nama $namalengkap telah berhasil diupdate'); document.location='tampilreservasi.php';</script>";
}


?>