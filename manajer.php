<?php
/**
 * Created by PhpStorm.
 * User: Tabul
 * Date: 10/09/2017
 * Time: 15:32
 */
session_start();
if ($_SESSION['posisi'] != 'manajer'){
    header("location: index.php");
}
include "dbcon.php";

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['registrasi_pegawai'])){
    //receive input form
    $ktp = mysqli_real_escape_string($db, $_POST['no_ktp']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    //$tanggal_lahir = mysqli_real_escape_string($db, $_POST['tanggal']);
    $alamat = mysqli_real_escape_string($db, $_POST['alamat']);
    $gaji = mysqli_real_escape_string($db, $_POST['gajipegawai']);
    $posisi = mysqli_real_escape_string($db, $_POST['posisi']);

    $query = "INSERT INTO pegawai (Username, Password, Nama_pegawai, Posisi, Gaji, Alamat, No_ktp, Email) VALUES ('$username', '$password', '$nama', '$posisi', '$gaji', '$alamat', '$ktp', '$email')";

    mysqli_query($db, $query);

    header("location: TampilanAwalManajer.php");
}

?>