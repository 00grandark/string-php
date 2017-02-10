<?php include "header.php" ?>

<html>
	<head>
		<title></title>
	</head>

		<body>
			<?php
			  // Fungsi String Substr by Alvin Naufal
			  $nama_lengkap = "Alvin Naufal";
			  $nama_depan = substr($nama_lengkap, 0, 5);
			  $nama_belakang = substr($nama_lengkap, 5, 11);
			  echo "Nama Lengkap : " . $nama_lengkap . "<br />";
			  echo "Nama Depan : " . $nama_depan . "<br />";
			  echo "Nama Belakang : " . $nama_belakang;
			?>
		</body>

</html>