<?php include "header.php" ?>

<html>
	<head>
		<title></title>
	</head>

		<body>
			<?php
			  // Fungsi String Explode by Alvin Naufal
			  $hari = "Senin Selasa Rabu Kamis Jum'at Sabtu Minggu";
			  $exp = explode(' ', $hari);
			  foreach ($exp as $val) {
				echo $val . "<br />";
			  }
			?>
		</body>

</html>