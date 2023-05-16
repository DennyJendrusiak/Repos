<html>
	<body>
		<?php
			echo "Guten Tag ".$_POST["vn"]." ".$_POST["nn"]."!";
			$liter=30/$_POST["lp"];
			echo "<p> Du tankst ".$liter." Liter Benzin.";
			if($_POST["pw"]=="bingo")
				echo "<p> Du bist drin.";
			else 
				echo "<p> Du bist raus. <p>";
			for ($i=$_POST["ug"];$i<=$_POST["og"]; $i=$i+1)
				echo $i."<br>";
		?>
	</body>
</html>
