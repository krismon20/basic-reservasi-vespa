<html>
    <head>
        <title>DATA ANDA</title>
        <link rel="stylesheet" type="text/css" href="lihatdata.css">

    </head>
    <body align="center">
        <h1>View Data Aksesoris</h1>
        <hr>
        <?php
            include 'koneksi.php';
            $namalengkap = $_GET['namalengkap'];
            $sql = "SELECT * FROM aksesoris WHERE namalengkap = '$namalengkap'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);
            
            // Mendefinisikan array jenisbarang
            $aksesoris = array('Top Box', 'Windshield', 'Carrier', 'Floor Mat', 'Handle Grip', 'Side Mirror', 'Rear Rack', 'Front Rack', 'Phone Holder', 'USB Charger');
            
            // Fungsi untuk memeriksa apakah radio button aktif
            function active_radio_button($value1, $value2){
                if($value1 == $value2){
                    return "checked='checked'";
                } else {
                    return "";
                }
            }
        ?>

        <form name="fpenjualan" action="updatereservasi.php" method="post">
            <input type="hidden" name="namalengkap" value="<?php echo $namalengkap; ?>" />
            <table align="center">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="namalengkap" size="10" value="<?php echo $row['namalengkap']; ?>" /></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>: <input name="nomortelepon" size="20" value="<?php echo $row['nomortelepon']; ?>" /></td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td>: <input name="alamatemail" size="20" value="<?php echo $row['alamatemail']; ?>" /></td>
                </tr>
                <tr>
                    <td>Aksesoris</td>
                    <td>: 
                        <select name="aksesoris">
                            <?php
                                foreach ($aksesoris as $ak){
                                    $selected = ($row['aksesoris'] == $ak) ? 'selected="selected"' : '';
                                    echo "<option value='$ak' $selected>$ak</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>: <input name="tanggal" size="8" value="<?php echo $row['tanggal']; ?>"></td>
                </tr>
            </table>
            <hr>
            <?php
                echo "<a href='editaksesoris.php?namalengkap=$namalengkap'>Edit</a>"
            ?>
            <?php
                echo "<a href='reservasi.php'>Tambah Baru</a>";
            ?>
            <?php
                echo "<a href='tampilreservasi.php'>Kembali</a>";
            ?>


        </form>
    </body>
</html>