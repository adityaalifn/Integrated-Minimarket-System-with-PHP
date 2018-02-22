<?php
/**
 * Created by PhpStorm.
 * User: Tabul
 * Date: 12/09/2017
 * Time: 16:18
 */
include "dbcon.php";
if(isset($_POST['input'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis = $_POST['jenis'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    mysqli_query($db, "INSERT INTO `barang`(`ID_barang`, `Nama_barang`, `Harga_beli`, `Harga_jual`, `Stok`, `Jenis_barang`) VALUES ($kode_barang, $nama_barang,$harga_beli,$harga_jual,$stok,$jenis)");
    header("location: inputbarang.php");
}

?>
