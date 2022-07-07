<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Mój kalendarz</title>
	<link rel="stylesheet" href="styl5.css" />
</head>
<body>
	<div id="baner1">
		<img src="logo1.png" alt="Mój kalendarz" />
	</div>
	<div id="baner2">
		<h2>KALENDARZ</h2>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'egzamin5');
		$kw1 = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "<h3>miesiąc: $tab[0], rok: $tab[1]</h3>";
		}
		?>
	</div>
	<div id="glowny">
	<?php
	$kw2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";
	$res2 = mysqli_query($con, $kw2);
	while($tab = mysqli_fetch_row($res2)) {
		echo "<div class='dane'>
		<h5>$tab[0]</h5>
		<p>$tab[1]</p>
		</div>";
	}
	?>
	</div>
	<div id="stopka">
		<form action="kalendarz.php" method="post">
			<label>
				dodaj wpis:
				<input type="text" name="wpis" />
			</label>
			<button>DODAJ</button>
		</form>
		<?php
		if(isset($_POST['wpis'])) {
			$wpis = $_POST['wpis'];
			$kw = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-13';";
			mysqli_query($con, $kw);
		}
		mysqli_close($con);
		?>
		<p>Stronę wykonał: PESEL</p>
	</div>
</body>
</html>