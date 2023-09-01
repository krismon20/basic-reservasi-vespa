<html>
    <center>
    <font size=6>
        Informasi Tawaran Lelang
    </font>
    <link rel="stylesheet" type="text/css" href="simpan.css">
    <hr width=320>
    <table>
    <?php
    require ("koneksi.php");
    $namalengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $nilailimit = $_POST ['nilailimit'];
    $jaminan = $_POST['jaminan'];
    $tanggal = $_POST['tanggal'];
    echo "<tr><td>Nama Lengkap<td>$namalengkap";
    echo "<tr><td>Alamat Email<td>$email";
    echo "<tr><td>Nilai Limit<td>$nilailimit";
    echo "<tr><td>Jaminan<td>$jaminan";
    echo "<tr><td>Tanggal<td>$tanggal";
    echo "</table>";
    echo "<hr width=320>";
    if($namalengkap!='')
        {
            $sql="insert into lelang values ('$namalengkap','$email','$nilailimit','$jaminan', '$tanggal') ";
            $hasil=mysqli_query($conn,$sql);
            echo "Lelang telah ditambahkan";
        }
        else
        {
            echo "Nama Lengkap dan Email Tidak Boleh Kosong";
        }
    ?>
    <br/>
    <a href="tabel_tawar_vespa.php">View Lelang</a>
</html>