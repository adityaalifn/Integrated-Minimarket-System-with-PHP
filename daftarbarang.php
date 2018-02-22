<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if($_SESSION["posisi"] != "gudang"){
    header("location: index.php");
}
include("dbcon.php");
$result = mysqli_query($db, "SELECT * FROM barang");
?>
<style>
    input[type=text] {
        width: 130px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    /* When the input field gets focus, change its width to 100% */
    input[type=text]:focus {
        width: 100%;
    }
</style>
<head>
  <title>Menu Gudang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand logo-cis" href="#">CIISys</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="daftarbarang.php">Daftar Barang</a></li>
      <li><a href="inputbarang.php">Input Data Barang</a></li>
      <li><a href="inputdatasupplier.php">Input Data Supplier</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="row">
    <div class="col-md-4 col-md-offset-3">
        <form action="daftarbarang.php" method="post" class="search-form">
            <div class="form-group has-feedback">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="cari" id="search" placeholder="search">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
        </form>
    </div>
</div>

<div class="container">
  <h2>Daftar Barang</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Jenis Barang</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>Stok Barang</th>
        <th>Ket. Gambar</th>
      </tr>
    </thead>
    <tbody>
    <?php
    if ((isset($_POST['cari'])) and (!("" == trim($_POST['cari'])))) {
        $rsch = $_POST['cari'];
        $result = mysqli_query($db, "SELECT * FROM barang WHERE ID_barang='$rsch'");
        if (mysqli_num_rows($result) == 1){
            while ($list = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $list['ID_barang'] . "</td>";
                echo "<td>" . $list['Nama_barang'] . "</td>";
                echo "<td>" . $list['Jenis_barang'] . "</td>";
                echo "<td>" . $list['Harga_beli'] . "</td>";
                echo "<td>" . $list['Harga_jual'] . "</td>";
                echo "<td>" . $list['Stok'] . "</td>";
                //echo "<td>".$list['gambar']."</td>";
                echo "<td><a href=\"editbarang.php?id_barang=$list[ID_barang]\">Edit</a> | <a href=\"hapusBarang.php?id_barang=$list[ID_barang]\" onclick=\" return confirm('Apa anda yakin menghapus barang ini?')\">Delete</a></td>";
                echo "</tr>";
            }
        }
        else{
            echo "Kode Barang tidak ditemukan";
        }
    }
    else{
        $result = mysqli_query($db, "SELECT * FROM barang");
        while ($list = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $list['ID_barang'] . "</td>";
            echo "<td>" . $list['Nama_barang'] . "</td>";
            echo "<td>" . $list['Jenis_barang'] . "</td>";
            echo "<td>" . $list['Harga_beli'] . "</td>";
            echo "<td>" . $list['Harga_jual'] . "</td>";
            echo "<td>" . $list['Stok'] . "</td>";
            //echo "<td>".$list['gambar']."</td>";
            echo "<td><a href=\"editbarang.php?id_barang=$list[ID_barang]\">Edit</a> | <a href=\"hapusBarang.php?id_barang=$list[ID_barang]\" onclick=\" return confirm('Apa anda yakin menghapus barang ini?')\">Delete</a></td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
  </table>
</div>


</body>
</html>