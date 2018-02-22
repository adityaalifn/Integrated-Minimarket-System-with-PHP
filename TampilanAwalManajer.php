<?php include('manajer.php') ?>

<html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
                <link href="style.css" rel="stylesheet">    
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <title>UIAwalManajer</title>
        </head>

<body>
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand logo-cis" href="TampilanAwalManajer.php">CIISYs</a>
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
                
              <div class="container" align="center">
                <h3>Selamat Datang di Menu Manajer</h3>
                <p>Citramart Integrated Information System</p>
              </div>
                            
</body>
</html>