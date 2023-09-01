<html>
    <head>
        <title>Lelang Vespa</title>
        <link rel="stylesheet" type="text/css" href="./tampilres.css">
    <head>
    <body>
        <center>
        <font size=7>
        Tampil Data Lelang<br>
        <hr>
        <table border=10>
        <tr bgcolor=silver>
            <td width=50><center>NO
            <td width=100><center>Nama Lengkap
            <td width=200><center>Alamat Email
            <td width=100><center>Nilai Limit
            <td width=50><center>Jaminan
            <td width=100><center>Tanggal Penawaran
            <td width=200><center>Proses</td>
        <?php
        require ("koneksi.php");
        $sql="select * from lelang";
        $hasil=mysqli_query($conn,$sql);
        $row=mysqli_fetch_row($hasil);

        $n=1;

        do
        {
            list($namalengkap,$email,$nilailimit,$jaminan,$tanggal)=$row;
            echo    "<tr>
                        <td>$n</td>
                        <td>$namalengkap</td>
                        <td>$email</td>
                        <td>$nilailimit</td>
                        <td>$jaminan</td>
                        <td align=right>$tanggal</td>
                        <td align=center>
                            <a href='lihatlelang.php?namalengkap=$namalengkap'>View</a>
                            <a href='editlelang.php?namalengkap=$namalengkap'>Edit</a>
                            <a href='hapuslelang.php?namalengkap=$namalengkap' onclick =\"return confirm
                            ('Anda yakin mau mengapus data ini?')\" >Delete</a>
                        </td>
                    </tr>";
            $n++;
        }
        while($row=mysqli_fetch_row($hasil));
        ?>
            <tr><td align="center" colspan="8"><a href="tawarlelang.php"> Tawar Sekarang</a></td>
            
            <tr>
                    <td align="center" colspan="8"><a href="lelang.html">Kembali</a></td>
            </tr>

    </body>
<html>