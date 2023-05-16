<html>
<body>
<h1> Kapitalberechnung </h1>
<table>
	<tr><td>Jahre</td><td>Kapital</td></tr>
	
		<?php
			$sk=$_POST["sk"]; 
			$lz=$_POST["lz"];
			$zs=$_POST["zs"];
			$kapital = $sk;
			for ($i = 1; $i <= $lz; $i = $i +1) { 
			$kapital=($kapital * $zs / 100.0) + $kapital; 
			if ($kapital >= 100000) $kapital=($kapital * -5 / 100.0) + $kapital;
			echo "<tr><td>".$i."</td><td>".number_format($kapital, 2,",",".")."&euro;</td> </tr>"  ;
		}
		?>
</table>
</body>
</html>