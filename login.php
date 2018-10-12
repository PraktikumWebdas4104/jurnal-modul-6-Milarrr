<form method="post" action="include.php">
	<h1> DAFTAR DAHULU </h1>
	Nim : <input type="text" name="nim"></br>
	Password  :<input type="password" name="password"></br>
	 <input type="submit" name="submit" value="masuk">
	 <a href='regist.html'>
</form>

<?php
	error_reporting(0);
if (isset($_POST['submit'])) {
	session_start();

	include 'koneksi.php';

	$nim = $_POST['nim'];
	$password = $_POST['Password'];

	$query = "SELECT nim, Password FROM jurnal WHERE nim = '$nim'";

	if ($nim == $_POST['nim'] && $pass == $_POST['password']) {
		$_SESSION["Login Sukses"]=1;
		$_SESSION["nim"]=$query['nim'];
		$_SESSION["password"]=$query['password'];

		echo "Login Sukses";
	}
	else{
		echo "Login gagal";
	}
}

?>