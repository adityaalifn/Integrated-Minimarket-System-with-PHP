<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu Gudang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="continainer-fluid">
    <div class="navbar-header">
      <a class="navbar-brand logo-cis" href="#">CIISys</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="daftarbarang.php">Daftar Barang</a></li>
      <li class="active"><a href="inputbarang.php">Input Data Barang</a></li>
      <li><a href="inputdatasupplier.php">Input Data Supplier</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  

<div class="container">
    <div class="row">
    <!-- <div class="container" align="center" "row centered-form"> -->
      <form class="form-horizontal" action='inputbarang-act.php' method="POST">
          <fieldset>
            <div id="legend">
                <h2 class="">Input Data Barang</h2>
            </div>
      
            <div class="control-group">
              <label class="control-label" for="kode_barang">Kode Barang</label>
              <div class="controls">
                <input type="text" id="kode_barang" name="kode_barang" placeholder="" class="form-control">
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="nama_barang">Nama Barang</label>
              <div class="controls">
                  <input type="text" id="nama_barang" name="nama_barang" placeholder="" class="form-control">
              </div>
            </div>
  
            <div class="control-group">
                <label class="control-label" for="jenis">Jenis Barang</label>
                <div class="controls">
                    <input type="text" id="jenis" name="jenis" placeholder="" class="form-control">  
                </div>
              </div>

              <div class="control-group">
                  <label class="control-label" for="harga_beli">Harga Beli</label>
                  <div class="controls">
                      <input type="number" id="harga_beli" name="harga_beli" placeholder="" class="form-control">
                  </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Harga Jual</label>
                    <div class="controls">
                        <input type="number" name="harga_jual" placeholder="" class="form-control">
                    </div>
                  </div>

                
                <div class="control-group">
                      <label class="control-label">Stok</label>
                      <div class="controls">
                          <input type="number" name="stok" placeholder="" class="form-control">
                      </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                          <button name="input" type="submit" class="btn btn-success">Input</button>
                        </div>
                    </div>
          </fieldset>
      </form>
                
            
            <br>

		</div>
	</div>
</div>

</body>
</html>