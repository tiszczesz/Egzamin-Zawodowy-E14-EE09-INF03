<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Organizer</title>
	<link rel="stylesheet" href="styl6.css" />
</head>
<body>
	<div id="baner1">
		<h2>MÓJ ORGANIZER</h2>

	</div>
	<div id="baner2">
		<form action="organizer.php" method="post">
			<label>
				Wpis wydarzenia:
				<input type="text" name="wpis" />
			</label>
			<button>ZAPISZ</button>
		</form>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'egzamin6');
		if(isset($_POST['wpis'])) {
			$wpis = $_POST['wpis'];
			$kw = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-08-27';";
			mysqli_query($con, $kw);
		}
		?>
	</div>
	<div id="baner3">
		<img src="logo2.png" alt="Mój organizer" />
	</div>
	<div id="glowny">
		<?php
		$kw1 = "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = 'sierpien';";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "<div class='blok'>
					<h6>$tab[0], $tab[1]</h6>
					<p>$tab[2]</p>
				</div>";
		}
		?>
	</div>
	<div id="stopka">
		<?php
		$kw2 = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01';";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "<h1>miesiąc: $tab[0], rok: $tab[1]</h1>";
		}
		mysqli_close($con);
		?>
		<p>Stronę wykonał: PESEL</p>
	</div>
</body>
</html>