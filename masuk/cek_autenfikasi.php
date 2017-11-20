<!DOCTYPE html>
<html>
<head>
	<title>Cek Autentifikasi - Bedah Karya</title>
</head>
<body>
	<?php
		$judulHalaman = "";
		$pengguna1 = "userbk";
		$password1 = "passwordbk";
		if (isset($_POST['txtUsername'],$_POST['txtPassword'])) {
			$temp_user1 = $_POST['txtUsername'];
			$temp_password1 = $_POST['txtPassword'];
			if ($temp_user1 == $pengguna1 & $temp_password1 == $password1) {
				session_start();
				echo "Benar";
				exit();
			} else {
				echo "Salah!";
				exit();
			}
		} else {
			echo "Salah";
		}
	?>
</body>
</html>