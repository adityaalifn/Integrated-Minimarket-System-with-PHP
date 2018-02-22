<?php
/**
 * Created by PhpStorm.
 * User: Tabul
 * Date: 13/09/2017
 * Time: 18:40
 */
include "dbcon.php";
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM pegawai WHERE No_ktp = '$id'") or die (mysqli_error());
header("location: DaftarPegawai.php")
?>