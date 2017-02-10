<?php include "header.php" ?>


<html>
	<head>
		<title></title>
	</head>

		<body>
			<?php
			  // Fungsi String Implode by Alvin Naufal
			  $nama = array("Alvin Naufal", "Awe Cikidaw", "Awe Awe", "Entahlah", "Ea aja dah");
			  $imp = implode(", ", $nama);
			  echo $imp;
			?>
		</body>

</html>