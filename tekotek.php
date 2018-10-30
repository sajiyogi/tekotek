<!DOCTYPE html>
<html>
<head>
	<title>Tekotek</title>
</head>
<body>
	<?php
		echo '<p style=font-family:"Helvetica";>Tekotek-kotek anak ayam turun 100</p>';
		$tekotek = 99;
		for ($i=$tekotek;$i > 0 ; $i--) { 
			if($i % 2 == 0){
				echo '<p style=font-family:"Helvetica";color:brown;>'."Mati satu tinggal $i</p>";
			}else{
				echo '<p style=font-family:"Helvetica";color:orange;>'."Mati satu tinggal $i</p>";
			}
			
		}
	?>
</body>
</html>