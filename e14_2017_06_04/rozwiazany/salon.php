<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Salon pielęgnacji</title>
	<link rel="stylesheet" href="salon.css"/>
</head>
<body>
	<div id="baner">
		<h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
	</div>
	<div id="lewy">
		<h3>SALON ZAPRAWSZA W DNIACH</h3>
		<ul>
			<li>Poniedziałek, 12:00 - 18:00</li>
			<li>Wtorek, 12:00 - 18:00</li>
		</ul>
		<a href="pies.jpg"><img src="pies-mini.jpg"/></a>
		<p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
	</div>
	<div id="srodkowy">
		<h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'Salon');
		$kw1 = "SELECT imie, rodzaj, nastepna_wizyta, telefon FROM zwierzeta WHERE nastepna_wizyta != 0;";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			if($tab[1] == 1) {
				echo "Pies: $tab[0]<br/>";
			}
			if($tab[1] == 2) {
				echo "Pies: $tab[0]<br/>";
			}
			echo "Data następnej wizyty $tab[2], telefon właściciela: $tab[3]<br/>";
		}
		?>
	</div>
	<div id="prawy">
		<h3>USŁUGI</h3>
		<?php
		$kw2 = "SELECT nazwa, cena FROM uslugi;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "$tab[0] $tab[1]<br/>";
		}
		mysqli_close($con);
		?>
	</div>
</body>
</html>