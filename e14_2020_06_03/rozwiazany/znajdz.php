<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Kwiaty</title>
	<link rel="stylesheet" href="styl.css" />
</head>
<body>
	<div id="baner">
		<h1>Moje kwiaty</h1>
	</div>
	<div id="lewy">
		<h3>Kwiaty dla Ciebie!</h3>
		<a href="https://swiatkwiatow.pl/">Rozpoznaj kwiaty</a><br/>
		<a href="znajdz.php">Znajdź kwiaciarnię</a><br/>
		<img src="gozdzik.jpg" alt="Goździk" />
	</div>
	<div id="prawy">
		<img src="gerbera.jpg" alt="Gerbera" />
		<img src="gozdzik.jpg" alt="Goździk" />
		<img src="roza.jpg" alt="Róża" />
		<p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>
		<form action="znajdz.php" method="post">
			<input type="text" name="miasto" />
			<button>SPRAWDŹ</button>
		</form>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
		if(!empty($_POST['miasto'])) {
			$miasto = $_POST['miasto'];
			$kw = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto';";
			$res = mysqli_query($con, $kw);
			while($tab = mysqli_fetch_row($res)) {
				echo "$tab[0], $tab[1]";
			}
		}
		mysqli_close($con);
		?>
	</div>
	<div id="stopka">
		<h3>Stronę opracował: PESEL</h3>
	</div>
</body>
</html>