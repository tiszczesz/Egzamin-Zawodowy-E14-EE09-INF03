<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Poradnia</title>
	<link rel="stylesheet" href="poradnia.css"/>
</head>
<body>
	<div id="baner">
		<h1>PORADNIA SPECJALISTYZNA</h1>
	</div>
	<div id="lewy">
		<h3>LEKARZE SPECJALIŚCI</h3>
		<table>
			<tr><td colspan="2">Poniedziałek</td></tr>
			<tr><td>Anna Kowalska</td><td>otolaryngolog</td></tr>
			<tr><td colspan="2">Wtorek</td></tr>
			<tr><td>Jan Nowak</td><td>kardiolog</td></tr>
		</table>
		<h3>LISTA PACJENTÓW</h3>
		<?php
			$con = mysqli_connect('localhost', 'root', '', 'poradnia');
			$kw1 = "SELECT id, imie, nazwisko, choroba FROM pacjenci";
			$res = mysqli_query($con, $kw1);
			while($tab = mysqli_fetch_row($res)) {
				echo "$tab[0] $tab[1] $tab[2] $tab[3]<br/>";
			}
			mysqli_close($con);
		?>
		<br/>
		<br/>
		<form action="pacjent.php" method="post">
			Podaj id:<br/>
			<input type="number" name="nr"/>
			<input type="submit" value="Pokaż szczegóły"/>
		</form>
	</div>
	<div id="prawy">
		<h2>KARTA PACJENTA</h2>
		<p>Nie wybrano pacjenta</p>
	</div>
	<div id="stopka">
		<p>utworzone przez: PESEL</p>
		<a href="./kwerendy.txt">Kwerendy do pobrania</a>
	</div>
</body>
</html>