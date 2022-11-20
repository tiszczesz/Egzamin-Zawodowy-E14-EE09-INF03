<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Weterynarz</title>
	<link rel="stylesheet" href="weterynarz.css"/>
</head>
<body>
	<div id="baner">
		<h1>GABINET WETERYNARYJNY</h1>
	</div>
	<div id="lewy">
		<h2>PSY</h2>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'weterynarz');
		$kw1 = "SELECT id, imie, wlasciciel FROM zwierzeta WHERE rodzaj = 1;";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "$tab[0] $tab[1] $tab[2]<br/>";
		}
		?>
		<h2>KOTY</h2>
		<?php
		$kw2 = "SELECT id, imie, wlasciciel FROM zwierzeta WHERE rodzaj = 2;";
		$res2 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res2)) {
			echo "$tab[0] $tab[1] $tab[2]<br/>";
		}
		?>
	</div>
	<div id="srodkowy">
		<h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
		<?php
		$kw2 = "SELECT imie, telefon, szczepienie, opis FROM zwierzeta;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "Pacjent: $tab[0]<br/>";
			echo "Telefon właściciela: $tab[1], ostatnie szczepienie: $tab[2], informacje: $tab[3]<hr/>";
		}
		mysqli_close($con)
		?>
	</div>
	<div id="prawy">
		<h2>WETERYNARZ</h2>
		<a href="logo.jpg"><img src="logo-mini.jpg"/></a>
		<p>Krzysztof Nowakowaski, lekarz weterynarii</p>
		<h2>GODZINY PRZYJĘĆ</h2>
		<table>
			<tr><td>Poniedziałek</td><td>15:00 - 19:00</td></tr>
			<tr><td>Wtorek</td><td>15:00 - 19:00</td></tr>
		</table>
	</div>
</body>
</html>