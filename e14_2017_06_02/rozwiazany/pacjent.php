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
		?>
		<br/>
		<br/>
		<form action="pacjent.php">
			Podaj id:<br/>
			<input type="number" name="nr"/>
			<input type="submit" value="Pokaż szczegóły"/>
		</form>
	</div>
	<div id="prawy">
		<h2>KARTA PACJENTA</h2>
		<?php
			if(!empty($_POST['nr'])) {
				$nr = $_POST['nr'];
				$kw2 = "SELECT imie, nazwisko, leki_przepisane, opis FROM pacjenci WHERE id = $nr";
				$res = mysqli_query($con, $kw2);
				while($tab = mysqli_fetch_row($res)) {
					echo "<p>Imię i nazwisko: $tab[0] $tab[1]</p>";
					echo "<p>Przepisane leki: $tab[2]</p>";
					echo "<p>Opis choroby: $tab[3]</p>";
				}
			}
			mysqli_close($con);
		?>
	</div>
	<div id="stopka">
		<p>utworzone przez: PESEL</p>
		<a href="./kwerendy.txt">Kwerendy do pobrania</a>
	</div>
</body>
</html>