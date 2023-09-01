<html>
    <head>
        <title>Update data Aksesoris</title>
        <link rel="stylesheet" type="text/css" href="edit.css">

    </head>
    <body align="center">
        <h1>Update Data Aksesoris</h1>
        <hr>
        <?php
            include 'koneksi.php';
            $namalengkap = $_GET['namalengkap'];
            $sql = "SELECT * FROM aksesoris WHERE namalengkap = '$namalengkap'";
            $query  = mysqli_query($conn, $sql);
            $row   = mysqli_fetch_array($query);

            // membuat data Jenis Barang menjadi dinamis dalam bentuk array
            $aksesoris = array('Top Box', 'Windshield', 'Carrier', 'Floor Mat', 'Handle Grip', 'Side Mirror', 'Rear Rack', 'Front Rack', 'Phone Holder', 'USB Charger');

            // membuat function untuk set aktif radio button
            function active_radio_button($value,$input){
                // apabila value dari radio sama dengan yang di input
                $result =  $value==$input?'checked':'';
                return $result;
            }
        ?>


        <form name="fpenjualan" action="updatereservasi.php" method="post">
            <input type="hidden" name="namalengkap" value=" <?php echo $namalengkap; ?>" />
            <table align="center">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="namalengkap" size="20" value="<?php echo $row['namalengkap']; ?>"></td>
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
                                echo "<option value='$ak' ";
                                echo $row['aksesoris']==$ak?'selected="selected"':'';
                                echo ">$ak</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Tanggal Pengiriman</td>
                    <td>: <input type="date"  name="tanggal" size="10"></td>
                </tr>
                </tr>
            </table>
            <hr>
                <input type="submit" value="Update">
                <input type="reset" value="Reset">
                <a href="tampilreservasi.php">Batal</a>
        </form>
    </body>
</html>