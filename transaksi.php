<?php
/**
 * Created by PhpStorm.
 * User: Tabul
 * Date: 14/09/2017
 * Time: 18:40
 */
// Return date/time info of a timestamp; then format the output
session_start();
if ($_SESSION['posisi'] != "kasir"){
    header("location: index.php");
}
$mydate=getdate(date("U"));
$username = $_SESSION['username'];
$harga = $_SESSION['harga'];
include "dbcon.php";
?>

<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
<title>Transaksi Kasir</title>
</head>
<body>
<div class="jumbotron text-center">
    <h1>Welcome to Citramart!</h1>
    <p>Belanja hemat tanpa diskon!</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <form method="post">
            <div class="form-group">
                <label for="usr">Tanggal Transaksi</label>
                <input type="text" class="form-control" id="usr" value="<?php echo "$mydate[year]-$mydate[mon]-$mydate[mday]"; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="pwd">ID Kasir</label>
                <input type="text" class="form-control" id="pwd" value="<?php echo $username;?>" readonly>
            </div>
            <div class="form-group">
                <label for="pwd">Total Harga</label>
                <h1>
                <?php
                    echo $harga;
                ?>
                </h1>
            </div>
            <div class="form-group">
                <button name="clear" class="btn">Clear</button>
                <button name="print" class="btn" onclick="confirm('Apakah transaksi ini sudah benar?')">Print!</button>
                <?php
                if (isset($_POST['clear'])){
                    $_SESSION['barang'] = array();
                    $_SESSION['harga'] = 0;
                    header("location: transaksi.php");
                }
                if (isset($_POST['print'])){
                    $minus = $_SESSION['barang'];
                    for ($i = 0; $i < count($minus); $i++) {
                        mysqli_query($db, "UPDATE barang SET Stok = Stok - 1 WHERE ID_barang='$minus[$i]'");
                    }
                    $_SESSION['barang'] = array();
                    $_SESSION['harga'] = 0;
                    header("location: transaksi.php");
                }
                ?>
            </div>
            </form>
        </div>
        <div class="col-sm-9">
            <form method="post">
            <div class="form-group">
                <input type="text" width="50%" placeholder="Kode Barang" name="id_barang" id="usr">
                <button type="submit" class="btn" name="tambah_barang" >Tambah</button>
            </div>
            </form>
            <div class="container">
                <h2>List Barang</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (isset($_POST['tambah_barang'])) {
                        $id_barang = $_POST['id_barang'];
                        $barangs = $_SESSION['barang'];
                        $check = mysqli_query($db, "SELECT * FROM barang WHERE ID_barang='$id_barang'");
                        if (mysqli_num_rows($check) == 1){
                            array_push($barangs, $id_barang);
                            $_SESSION['barang'] = $barangs;
                        }
                        else{
                            echo "Kode Barang tidak ada";
                        }
                        $harga = 0;
                        for ($x = 0; $x < count($barangs); $x++) {
                            $result = mysqli_query($db, "SELECT * FROM barang WHERE ID_barang='$barangs[$x]'");
                            $res = mysqli_fetch_array($result);
                            $harga = $harga + $res['Harga_jual'];
                            echo "<tr>";
                            echo "<td>" . $res['ID_barang'] . "</td>";
                            echo "<td>" . $res['Nama_barang'] . "</td>";
                            echo "<td>" . $res['Harga_jual'] . "</td>";
                            echo "</tr>";
                        }
                        $_SESSION['harga'] = $harga;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
