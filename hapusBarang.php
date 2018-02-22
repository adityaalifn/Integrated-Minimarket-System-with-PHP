<?php
/**
 * Created by PhpStorm.
 * User: Tabul
 * Date: 11/09/2017
 * Time: 9:58
 */
include "dbcon.php";
$id = $_GET['id_barang'];
mysqli_query($db, "DELETE FROM barang WHERE ID_barang = '$id'") or die (mysqli_error());
header("location: daftarbarang.php?pesan=hapus");

?>