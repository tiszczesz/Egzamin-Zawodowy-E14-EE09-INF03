<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Restauracja Kulinaria.pl</title>
	<link rel="stylesheet" href="styl4.css" />
</head>
<body>
	<div id="baner">
		<h2>Restauracja Kulinaria.pl Zaprasza!</h2>
	</div>
	<div id="lewy">
		<p>Dania mięsne zamówiesz już od 
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'baza');
		$kw1 = "SELECT MIN(cena) FROM dania WHERE typ = 2";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) echo "$tab[0]";
		?>
		 złotych</p>
		 <img src="menu.jpg" alt="Pyszne spaghetti" />
		 <br/>
		 <a href="menu.jpg">Pobierz obraz</a>
	</div>
	<div id="srodkowy">
		<h3>Przekąski</h3>
		<?php
		$kw2 = "SELECT id, nazwa, cena FROM dania WHERE typ = 3";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "<p>$tab[0] $tab[1] $tab[2]</p>";
		}
		?>
	</div>
	<div id="prawy">
		<h3>Napoje</h3>
		<?php
		$kw3 = "SELECT id, nazwa, cena FROM dania WHERE typ = 4";
		$res3 = mysqli_query($con, $kw3);
		while($tab = mysqli_fetch_row($res3)) {
			echo "<p>$tab[0] $tab[1] $tab[2]</p>";
		}
		mysqli_close($con);
		?>
	</div>
	<div id="stopka">
		Stronę internetową opracował: <i>PESEL</i>
	</div>
</body>
</html>