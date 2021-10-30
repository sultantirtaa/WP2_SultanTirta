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

                <center>
                    <form action="<?= base_url('sultanshoes/cetak'); ?>" method="post">
                        <table cellpadding="10px">
                             <tr>
                                <th colspan="3">
                                    Form Input Transaksi
                                    <hr>
                                </th>
                            </tr>
                            <tr>
                                <th>Nama Pembeli</th>
                                <td>:</td>
                                <td>
                                    <input type="text" name="np" id="np">
                                    <?= form_error('np', '<br><span style="color:red;">', '</span>'); ?>                                   
                                </td>
                            </tr>
                            <tr>
                                <th>No Handphone</th>
                                <td>:</td>
                                <td>
                                    <input type="text" name="nh" id="nh">
                                    <?= form_error('nh', '<br><span style="color:red;">', '</span>'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Merk Sepatu</th>
                                <td>:</td>
                                <td>
                                    <select name="ms" id="ms">
                                    <option value=""> --PILIH SEPATU-- </option>
                                    <option value="Nike">Nike</option>
                                    <option value="Adidas">Adidas</option>
                                    <option value="Kickers">Kickers</option>
                                    <option value="Eiger">Eiger</option>
                                    <option value="Bucherri">Bucherri</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Ukuran Sepatu</th>
                                <td>:</td>
                                <td>
                                    <select name="us" id="us">
                                    <option value=""> --PILIH UKURAN-- </option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center">
                                    <hr>
                                    <input type="submit" value="Submit">
                                </td>
                            </tr>
                        </table>
                    </form>
                </center>
</body>
</html>