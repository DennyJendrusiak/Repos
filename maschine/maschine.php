<html>
<body>
<h1> Abschreibung </h1>
<table>
	<tr><td>Jahre</td><td>Wert</td></tr>
	
		<?php
			$nw=$_POST["nw"]; 
			$alter=$_POST["alter"];
			$lz=$_POST["lz"];
			$wert = $nw;
			for ($i = 1; $i <= $alter; $i = $i +1) { 
			$wert=$wert * 0.9; 
			if ($lz < 8) $wert = $wert*1.02;
			else $wert = $wert * 0.98;
			echo "<tr><td>".$i."</td><td>".number_format($wert, 2,",",".")."&euro;</td> </tr>"  ;
		}
		?>
</table>
</body>
</html>
		
		