<html>
	<body>
		<?php
		srand((double)microtime() * 1000000);
		$summe1=0;
		$summe2=0;
		echo "<center>";
		echo "DAS SPIEL DES JAHRES<p>";
		echo "<table><tr><td>Spieler 1</td><td> Spieler 2</td></tr>";
		while($summe1 < 50 && $summe2 <50)
		{
			$wurf1=rand(1,6);
			$summe1=$summe1+$wurf1;
			echo "<tr><td>".$summe1."</td>";
			$wurf2=rand(1,6);
			$summe2=$summe2+$wurf2;
			echo "<td>".$summe2."</td></tr>";
		}
		echo "</table> <br><br>";
		if($summe1>=50 && $summe2<50)
		{
			echo "Spieler 1 hat gewonnen!";
		}
		if ($summe2>=50 && $summe1<50)
		{
			echo "Spieler 2 hat gewonnen!";
		}
		if ($summe1 == $summe2)
		{
			echo "Unentschieden!";
		}
		
		?>
	</body>
</html>