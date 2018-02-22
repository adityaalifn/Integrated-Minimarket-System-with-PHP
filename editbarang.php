<?php
include_once("dbcon.php");

if(isset($_POST['update']))
{

    $id_barang = mysqli_real_escape_string($db, $_POST['id_barang']);
    $nama_barang = mysqli_real_escape_string($db, $_POST['nama_barang']);
    $harga_beli = mysqli_real_escape_string($db, $_POST['harga_beli']);
    $harga_jual = mysqli_real_escape_string($db, $_POST['harga_jual']);
    $stok = mysqli_real_escape_string($db, $_POST['stok']);


    if(empty($nama_barang) || empty($harga_beli)|| empty($harga_jual) ||  (empty($stok))) {


        if(empty($nama_barang)) {
            echo "<font color='red'>nama barang tidak boleh kosong.</font><br/>";
        }

        if(empty($harga_beli)) {
            echo "<font color='red'>harga beli tidak boleh kosong.</font><br/>";
        }
        if(empty($harga_jual)) {
            echo "<font color='red'>harga jual tidak boleh kosong.</font><br/>";
        }
    } else {
        $result = mysqli_query($db, "UPDATE barang SET Nama_barang='$nama_barang',Harga_beli='$harga_beli',Harga_jual='$harga_jual',Stok='$stok' WHERE ID_barang='$id_barang'");
        header("Location: daftarbarang.php");
    }
}
?>
<?php

$id_barang = $_GET['id_barang'];

$result = mysqli_query($db, "SELECT * FROM barang WHERE ID_barang='$id_barang'");

while($res = mysqli_fetch_array($result))
{
    $nama_barang = $res['Nama_barang'];
    $harga_beli = $res['Harga_beli'];
    $harga_jual = $res['Harga_jual'];
    $stok = $res['Stok'];
}

?>
<style>
    .member-dashboard {
        padding: 10px;
        background: #D2EDD5;
        color: #555;
        border-radius: 4px;
        display: inline-block;
        text-align:center;
    }
</style>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Edit Data Barang</title>
</head>
<div class="">
    <body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand logo-cis" href="#">CIISys</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="daftarbarang.php">Daftar Barang</a></li>
                <li class="active"><a href="#">Input Data Barang</a></li>
                <li><a href="inputdatasupplier.php">Input Data Supplier</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <br/><br/>

    <form name="form1" method="post" action="editbarang.php">
        <table border="0">
            <tr>
                <td>NAMA BARANG</td>
                <td><input type="text" name="nama_barang" value="<?php echo $nama_barang;?>"></td>
            </tr>
            <tr>
                <td>HARGA BELI</td>
                <td><input type="number" name="harga_beli" value="<?php echo $harga_beli;?>"></td>
            </tr>
            <tr>
                <td>HARGA JUAL</td>
                <td><input type="number" name="harga_jual" value="<?php echo $harga_jual;?>"></td>
            </tr>
            <tr>
                <td>STOK</td>
                <td><input type="number" name="stok" value="<?php echo $stok;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_barang" value=<?php echo $_GET['id_barang'];?>></td>
                <td><input type="submit" name="update" value="Edit"></td>
            </tr>
        </table>
    </form>
    </body>
</div>
</html>
