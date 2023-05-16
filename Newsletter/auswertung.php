<html>
	<body>
	<?php
		echo "Hallo ".$_POST["vn"]." ".$_POST["nn"]."!
		<p>Vielen Dank fuer Ihr Interesse. Ihre Daten:<p>";
		echo "e-mail: ".$_POST["em"]."<p>";
		echo "Sie sind durch ";
		switch($_POST["list"]) {
			case 'f': echo "Freunde "; break;
			case 'z': echo "Zeitschrift "; break;
			case 'i': echo "Internet "; break;
			case 'w': echo "Werbung "; break;
		}
		echo "auf uns aufmerksam geworden<p>";
		echo "Sie haben Ihren Urlaub ";
		switch($_POST["urlaub"]){
			case 'bald': echo "in ca. 1-3 Monaten geplant."; break;
			case 'spaeter': echo "in ca. 6 Monaten geplant."; break;
			case 'nicht': echo "nicht in diesem Jahr geplant."; break;
		}
		echo "<p>Zusaetzliche Informationen:".$_POST["mit"]."<p>";
		if(isset($_POST["agb"])) echo "Sie akzeptieren die AGB´s";
	?>
	</body>
</html>
