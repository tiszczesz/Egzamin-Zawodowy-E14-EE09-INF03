<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Pokoje</title>
	<link rel="stylesheet" href="styl.css" />
</head>
<body>
	<div id="baner1">
		<h2>WYNAJEM POKOI</h2>
	</div>
	<div id="menu1">
		<a href="index.html">POKOJE</a>
	</div>
	<div id="menu2">
		<a href="cennik.php">CENNIK</a>
	</div>
	<div id="menu3">
		<a href="kalkulator.html">KALKULATOR</a></div>
	<div id="baner2"></div>
	<div id="lewy">	</div>
	<div id="srodkowy">
		<h1>Cennik</h1>
		<table>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'wynajem');
		$kw = "SELECT * FROM pokoje;";
		$res = mysqli_query($con, $kw);
		while($tab = mysqli_fetch_row($res)) {
			echo "<tr><td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]</td></tr>";
		}
		mysqli_close($con)
		?>
		</table>
	</div>
	<div id="prawy"></div>
	<div id="stopka">
		<p>Stronę opracował: PESEL</p>
	</div>
</body>
</html>