<?php
$koneksi = new mysqli("localhost", "root", "", "jurnal06");

  			if (isset($_POST['submit'])) {
				$koneksi = new mysqli("localhost", "root", "", "jurnal06");

				if ($koneksi) {
					$nama = $_POST['nama'];
					$nim = $_POST['nim'];
					$kelas = $_POST['kelas'];
					$jenis_Kelamin= $_POST['jenis_kelamin'];
					$hobi = $_POST['hobi'];
					$fakultas =$_POST['fakultas'];
					$alamat = $_POST['alamat'];
					$password=$_POST['password'];
					if(strlen($nim)==10 && ($nama)<35){
					
					$sql = $koneksi->query("
						INSERT INTO `jurnal` (`nama`,`nim`, `kelas`,`jenis_elamin`,`hobi`,`fakultas`,`alamat`,`password`)
						VALUES ('$nama','$nim', '$kelas','$jenis_kelamin','$hobi','$fakultas','$alamat','$password')
										   ");
					echo "REGISTRASI SUKSES<br>";
				
				}
				else{
					echo "REGISTRASI GAGAL";
				}
				}else{
				}
  			}
 ?>