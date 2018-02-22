<?php
/**
 * Created by PhpStorm.
 * User: Tabul
 * Date: 12/09/2017
 * Time: 16:55
 */

include "dbcon.php";
if (isset($_POST['input'])){
    $id_supplier = $_POST['id_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $no_kontak = $_POST['no_kontak'];
    $rekening = $_POST['rekening'];
    $alamat = $_POST['alamat'];

    mysqli_query($db, "INSERT INTO `supplier`(`ID_supplier`, `Nama_supplier`, `No_rekening`, `Alamat_supplier`, `No_kontak`) VALUES ($id_supplier, $nama_supplier, $rekening, $alamat, $no_kontak)");
    header("location: inputdatasupplier.php");
}

?>