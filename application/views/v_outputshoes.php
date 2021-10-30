<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <title>SULTAN SHOES</title>
        <link rel="stylesheet" type="text/css">
</head>
<body>
    <header align="center">
        <h1>Sultan Shoes</h1>
        <img src="image/nike.png">
    </header>
            <?php echo validation_errors(); ?>
                <center>
                    
                        <table cellpadding="10px">
                             <tr>
                                <th colspan="3">
                                    Form Output Transaksi
                                    <hr>
                                </th>
                            </tr>
                            <tr>
                                <th>Nama Pembeli</th>
                                <td>:</td>
                                <td>
                                    <?= $np; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>No Handphone</th>
                                <td>:</td>
                                <td>
                                    <?= $nh; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Merk Sepatu</th>
                                <td>:</td>
                                <td>
                                    <?= $ms; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Ukuran Sepatu</th>
                                <td>:</td>
                                <td>
                                    <?= $us; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>:</td>
                                <td>
                                    <?= $harga; ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center">
                                    <hr>
                                    <a href="<?php echo base_url().'Sultanshoes' ?>">Back</a>
                                </td>
                            </tr>
                        </table>
                   
                </center>
</body>
</html>