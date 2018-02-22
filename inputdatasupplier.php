<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
    <title>
        Menu Gudang
    </title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand logo-cis" href="#">CIISys</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="daftarbarang.php">Daftar Barang</a></li>
            <li><a href="inputbarang.php">Input Data Barang</a></li>
            <li class="active"><a href="inputdatasupplier.php">Input Data Supplier</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
    </div>
</nav>

<div
<form method="post" action="inputdatasupplier-act.php">
    <input placeholder="ID Supplier" name="id_supplier">
    <input placeholder="Nama Supplier" name="nama_supplier">
    <input placeholder="Nomer Rekening" name="rekening">
    <input placeholder="Alamat" name="alamat">
    <input type="number" placeholder="Nomer Kontak" name="no_kontak">
    <button name="input" type="submit">Input</button>
</form>
</body>
</html>