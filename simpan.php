<html>
    <center>
    <font size=6>
        Informasi Data Aksesoris
    </font>
    <link rel="stylesheet" type="text/css" href="simpan.css">
    <hr width=320>
    <table>
    <?php
    require ("koneksi.php");
    $namalengkap = $_POST['namalengkap'];
    $nomortelepon = $_POST['nomortelepon'];
    $alamatemail = $_POST['alamatemail'];
    $aksesoris = $_POST['aksesoris'];
    $tanggal = $_POST['tanggal'];
    echo "<tr><td>Nama Lengkap<td>$namalengkap";
    echo "<tr><td>Nomor Telepon<td>$nomortelepon";
    echo "<tr><td>Alamat Email<td>$alamatemail";
    echo "<tr><td>Aksesoris<td>$aksesoris";
    echo "<tr><td>Tanggal<td>$tanggal";
    echo "</table>";
    echo "<hr width=320>";
    if($namalengkap!='')
        {
            $sql="insert into aksesoris values ('$namalengkap','$nomortelepon','$alamatemail','$aksesoris','$tanggal') ";
            $hasil=mysqli_query($conn,$sql);
            echo "Data telah ditambahkan";
        }
        else
        {
            echo "Nama Lengkap Tidak Boleh Kosong";
        }
    ?>
    <br/>
    <a href="tampilreservasi.php">View Aksesoris</a>
</html>