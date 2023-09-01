<html>
    <head>
        <title>Reservasi Aksesoris</title>
        <link rel="stylesheet" type="text/css" href="./tampilres.css">
    <head>
    <body>
        <center>
        <font size=7>
        Tampil Data Aksesoris<br>
        <hr>
        <table border=10>
        <tr bgcolor=silver>
            <td width=50><center>NO
            <td width=100><center>Nama Lengkap
            <td width=200><center>Nomor Telepon
            <td width=100><center>Alamat Email
            <td width=50><center>Aksesoris
            <td width=100><center>Tanggal Pengiriman
            <td width=200><center>Proses</td>
        <?php
        require ("koneksi.php");
        $sql="select * from aksesoris";
        $hasil=mysqli_query($conn,$sql);
        $row=mysqli_fetch_row($hasil);

        $n=1;

        do
        {
            list($namalengkap,$nomortelepon,$alamatemail,$aksesoris,$tanggal)=$row;
            echo    "<tr>
                        <td>$n</td>
                        <td>$namalengkap</td>
                        <td>$nomortelepon</td>
                        <td>$alamatemail</td>
                        <td>$aksesoris</td>
                        <td align=right>$tanggal</td>
                        <td align=center>
                            <a href='lihatdata.php?namalengkap=$namalengkap'>View</a>
                            <a href='editaksesoris.php?namalengkap=$namalengkap'>Edit</a>
                            <a href='hapusdata.php?namalengkap=$namalengkap' onclick =\"return confirm
                            ('Anda yakin mau mengapus data ini?')\" >Delete</a>
                        </td>
                    </tr>";
            $n++;
        }
        while($row=mysqli_fetch_row($hasil));
        ?>
            <tr><td align="center" colspan="8"><a href="reservasi.php"> Reservasi Sekarang</a></td>
            
            <tr>
                    <td align="center" colspan="8"><a href="index.html">Home</a></td>
            </tr>

    </body>
<html>