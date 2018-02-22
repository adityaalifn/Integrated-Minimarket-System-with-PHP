<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Menu Manajer</title>
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
<div class="row centered-form center" align="center">
<form method="post" class="centered-form" action="manajer.php" id="frm">
    <input type="number" placeholder="Nomer KTP" name="no_ktp">
    <input placeholder="Username" name="username">
    <input placeholder="Password" name="password">
    <input placeholder="Email" name="email">
    <input placeholder="Nama" name="nama">
    <input placeholder="Alamat" name="alamat">
    <input type="number" placeholder="Gaji" name="gajipegawai">
    <select name="posisi">
        <option value="kasir">Kasir</option>
        <option value="koordinator">Koordinator</option>
        <option value="gudang">Logistik</option>
    </select>
    <button type="submit" onclick="confirm('Are you sure?')" name="registrasi_pegawai">Input</button>
</form>
</div>
</body>
</html>