<html lang="en">
<?php
session_start();
if ($_SESSION['posisi'] != "manajer"){
    header("location: index.php");
}
include("dbcon.php");
$result = mysqli_query($db, "SELECT * FROM pegawai");
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        <link href="style.css" rel="stylesheet">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>DaftarPegawai</title>
    </head>
    
    <body>
            <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <a class="navbar-brand logo-cis" href="TampilanAwalManajer.php">CIISys</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>                        
                        </button>
                        
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Laporan <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="LaporanStatistika.html">Statistik Citramart</a></li>
                              <li><a href="LaporanKeuangan.html">Laporan Keuangan</a></li>
                              <li><a href="LaporanPengadaanBarang.html">Laporan Pengadaan Barang</a></li>
                              <li><a href="LaporanPenjualanBarang.html">Laporan Penjualan Barang</a></li>
                            </ul>
                          </li>
                          <li><a href="DaftarPegawai.php">Daftar Pegawai</a></li>
                          <li><a href="RegistrasiPegawai.php">Registrasi Pegawai</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                          </ul>
                      </div>
                    </div>
                  </nav>   
                  <div class="container">
                        <h2>Daftar Pegawai </h2>
                        <p>Citramart</p>            
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>No KTP</th>
                              <th>Nama Pegawai</th>
                              <th>Alamat</th>
                              <th>Posisi</th>
                              <th>Gaji</th>
                              <th>Email</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                          while($data = mysqli_fetch_array($result)){
                          ?>
                          <tr>
                              <td><?php echo $data['No_ktp']; ?></td>
                              <td><?php echo $data['Nama_pegawai']; ?></td>
                              <td><?php echo $data['Alamat']; ?></td>
                              <td><?php echo $data['Posisi']; ?></td>
                              <td><?php echo $data['Gaji']; ?></td>
                              <td><?php echo $data['Email']; ?></td>
                              <td><?php echo $data['Username']; ?></td>
                              <td>
                                  <a class="edit" href="editPegawai.php?id=<?php echo $data['No_ktp']; ?>">Edit</a> |
                                  <a onclick="return confirm('Apakah anda yakin ingin menghapus pegawai ini?')" class="hapus" href="hapusPegawai.php?id=<?php echo $data['No_ktp']; ?>">Hapus</a>
                              </td>
                          </tr>
                          <?php } ?>

                          </tbody>
                        </table>
                      </div>
                                         
                  
    </body>
    </html>