<html>
    <head>
        <title>Reservasi</title>
        <link rel="stylesheet" type="text/css" href="reservasi.css">
    <head>
    <?php
        require ("aksesorisfunction.php");
    ?>
    <body align="center">
        <h1>Input Data Aksesoris</h1>
        <hr>
        <form name="fpenjualan" action="simpan.php" method="post">
            <table align="center">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="namalengkap" size="20"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>: <input name="nomortelepon" size="20"></td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td>: <input name="alamatemail" size="20"></td>
                </tr>
                <tr>
                    <td>Aksesoris</td>
                    <td>
                        <select name="aksesoris">
                            <option value="Top Box">Top Box</option>
                            <option value="Windshield">Windshield</option>
                            <option value="Carrier">Carrier</option>
                            <option value="Floor Mat">Floor Mat</option>
                            <option value="Handle Grip">Handle Grip</option>
                            <option value="Side Mirror">Side Mirror</option>
                            <option value="Rear Rack">Rear Rack</option>
                            <option value="Front Rack">Front Rack</option>
                            <option value="Phone Holder">Phone Holder</option>
                            <option value="USB Charger">USB Charger</option>
                            <!-- Tambahkan pilihan aksesoris lainnya di sini -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pengiriman</td>
                    <td>: <input type="date"  name="tanggal" size="10"></td>
                </tr>
            </table>
            <hr>
                <input type="submit" value="simpan">
                <input type="reset" value="reset">
        </form>
    </body>
</html>

