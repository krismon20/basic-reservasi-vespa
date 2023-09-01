<html>
    <head>
        <title>Tawar Lelang</title>
        <link rel="stylesheet" type="text/css" href="reservasi.css">
    <head>
    <?php
        require ("lelangfunction.php");
    ?>
    <body align="center">
        <h1>Input Tawaran Lelang</h1>
        <hr>
        <form name="fpenjualan" action="simpanlelang.php" method="post">
            <table align="center">
            <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="namalengkap" size="20"></td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td>: <input name="email" size="20"></td>
                </tr>
                <tr>
                    <td>Nilai Limit</td>
                    <td>: <input name="nilailimit" size="20"></td>
                </tr>
                <tr>
                    <td>Jaminan</td>
                    <td>: <input name="jaminan" size="20" ></td>
                </tr>
                <tr>
                <tr>
                    <td>Tanggal Penawaran</td>
                    <td>: <input type="date"  name="tanggal" size="10"></td>
                </tr>
                </tr>
            </table>
            <hr>
                <input type="submit" value="simpan">
                <input type="reset" value="reset">
        </form>
    </body>
</html>

