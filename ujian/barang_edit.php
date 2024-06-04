<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bar_crud.css" />
</head>

<header>
    Cashiercom - Masukkan Data
    <a type="button" href="login.php" style="color:white; margin-left:64%; font-size:27px;">Logout</a>
</header>

<body>

    <div class="sidebar">
        <a style="color:white;" href="penjualan.php">Penjualan</a><br><br>
        <a style="color:blue;" href="barang.php">Gudang</a>
    </div>

    <div class="container">
        <br><br>
        <center>
            <form action="barang.php" id="box" class="margin" method="post">
            <label for="text" >Nama Barang: </label><br>
            <input type="text" id="name" name="namabarang" class="label" placeholder="Input your Nama barang"><br>

            <label for="text" >Harga Barang:</label><br>
            <input type="text" id="pass" name="harga" class="label" placeholder="Input the price"><br>

            <label for="text" >Stok Barang: </label><br>
            <input type="number" class="label" id="email" name="stok" placeholder="Input the stock" min="0"><br>

            <center><a href="barang.php" class="link">Kembali |</a> <input name="submit" type="submit" value="Submit"
                    class="button"></center>

        </form>
    </center>

        <?php
        include "konek.php";
        if (isset($_POST['submit'])) {
            // Membuat variable setiap field inputan agar kodingan lebih rapi.
            $namabarang = $_POST['namabarang'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];

            // Membuat Query
            $query = "INSERT INTO userlogin (namabarang, harga, stok) VALUES('$namabarang', 
    '$hraga', '$stok')";

            $result = mysqli_query($conn, $query);
        }



        ?>
    </div>

</body>
<div class="footer">Copyrights</div>

</html>