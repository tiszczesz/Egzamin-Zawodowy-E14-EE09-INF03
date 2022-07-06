<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Wycieczki i urlopy</title>
	<link rel="stylesheet" href="styl3.css" />
</head>
<body>
	<div id="baner">
		<h1>BIURO PODRÓŻY</h1>
	</div>
	<div id="lewy">
		<h2>KONTAKT</h2>
		<a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
		<p>telefon: 555666777</p>
	</div>
	<div id="srodkowy">
		<h2>GALERIA</h2>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'egzamin3');
		$kw1 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "<img src='$tab[0]' alt='$tab[1]' />";
		}
		?>
	</div>
	<div id="prawy">
		<h2>PROMOCJE</h2>
		<table>
			<tr>
				<td>Jesień</td>
				<td>Grupa 4+</td>
				<td>Grupa 10+</td>
			</tr>
			<tr>
				<td>5%</td>
				<td>10%</td>
				<td>15%</td>
			</tr>
		</table>
	</div>
	<div id="dane">
		<h2>LISTA WYCIECZEK</h2>
		<?php
		$kw2 = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = TRUE;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "$tab[0]. $tab[1], $tab[2], cena: $tab[3]<br/>";
		}
		mysqli_close($con);
		?>
	</div>
	<div id="stopka">
		<p>Stronę wykonał: PESEL</p>
	</div>
</body>
</html>