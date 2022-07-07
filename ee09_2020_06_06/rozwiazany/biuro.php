<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Wycieczki krajoznawcze</title>
	<link rel="stylesheet" href="styl4.css" />
</head>
<body>
	<div id="baner">
		<h1>WITAMY W BIURZE PODRÓŻY</h1>
	</div>
	<div id="dane">
		<h3>ARCHIWUM WYCIECZEK</h3>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'egzamin4');
		$kw1 = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = 0;";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "$tab[0]. $tab[1], cena: $tab[2]<br/>";
		}
		?>
	</div>
	<div id="lewy">
		<h3>NAJTANIEJ</h3>
		<table>
			<tr>
				<td>Włochy</td>
				<td>od 1200 zł</td>
			</tr>
			<tr>
				<td>Francja</td>
				<td>od 1200 zł</td>
			</tr>
			<tr>
				<td>Hiszpania</td>
				<td>od 1400 zł</td>
			</tr>
		</table>
	</div>
	<div id="srodkowy">
		<h3>TU BYLIŚMY</h3>
		<?php
		$kw2 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "<img src='$tab[0]' alt='$tab[1]' />";
		}
		mysqli_close($con);
		?>
	</div>
	<div id="prawy">
		<h3>SKONTAKTUJ SIĘ</h3>
		<a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
		<p>telefon: 555666777</p>
	</div>
	<div id="stopka">
		<p>Stronę wykonał: PESEL</p>
	</div>
</body>
</html>