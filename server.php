<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ciisys');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) {
		    array_push($errors, "Username is required");
		}
		if (empty($email)) {
		    array_push($errors, "Email is required");
		}
		if (empty($password_1)) {
		    array_push($errors, "Password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO pegawai (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
		    if (mysqli_num_rows(mysqli_query($db,"SELECT * FROM pegawai WHERE (Username='$username' AND Password='$password' AND Posisi='koordinator')")) == 1) {
				$_SESSION['username'] = $username;
                $_SESSION['posisi'] = "koordinator";
				$_SESSION['success'] = "You are now logged in as Koordinator";
				header('location: menukoordinator.php');
			}
			else if (mysqli_num_rows(mysqli_query($db,"SELECT * FROM pegawai WHERE (Username='$username' AND Password='$password' AND Posisi='gudang')")) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['posisi'] = "gudang";
                $_SESSION['success'] = "You are now logged in as Logistik";
                header('location: daftarbarang.php');
            }
            else if (mysqli_num_rows(mysqli_query($db,"SELECT * FROM pegawai WHERE (Username='$username' AND Password='$password' AND Posisi='kasir')")) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['posisi'] = "kasir";
                $_SESSION['success'] = "You are now logged in as Kasir";
                $_SESSION['barang'] = array();
                $_SESSION['harga'] = 0;
                header('location: transaksi.php');
            }
            else if (mysqli_num_rows(mysqli_query($db,"SELECT * FROM manajer WHERE (id_manajer='$username' AND password='$password')")) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['posisi'] = "manajer";
                $_SESSION['success'] = "You are now logged in as Manager";
                header('location: TampilanAwalManajer.php');
            }
            else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>