<html>
    <head>
        <title>Update Lelang</title>
        <link rel="stylesheet" type="text/css" href="edit.css">

    </head>
    <body align="center">
        <h1>Update Lelang</h1>
        <hr>
        <?php
            include 'koneksi.php';
            $namalengkap = $_GET['namalengkap'];
            $sql = "SELECT * FROM lelang WHERE namalengkap = '$namalengkap'";
            $query  = mysqli_query($conn, $sql);
            $row   = mysqli_fetch_array($query);

            
        ?>


        <form name="fpenjualan" action="updatelelang.php" method="post">
            <input type="hidden" name="namalengkap" value=" <?php echo $namalengkap; ?>" />
            <table align="center">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="namalengkap" size="20" value="<?php echo $row['namalengkap']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td>: <input name="email" size="20" value="<?php echo $row['email']; ?>" /></td>
                </tr>
                <tr>
                    <td>Nilai Limit</td>
                    <td>: <input name="nilailimit" size="20" value="<?php echo $row['nilailimit']; ?>" /></td>
                </tr>
                <tr>
                    <td>Jaminan</td>
                    <td>: <input name="jaminan" size="20" value="<?php echo $row['jaminan']; ?>" /></td>
                </tr>
                <tr>
                    <td>Tanggal Penawaran</td>
                    <td>: <input type="date"  name="tanggal" size="10"></td>
                </tr>
            </table>
            <hr>
                <input type="submit" value="Update">
                <input type="reset" value="Reset">
                <a href="tabel_tawar_vespa.php">Batal</a>
        </form>
    </body>
</html>