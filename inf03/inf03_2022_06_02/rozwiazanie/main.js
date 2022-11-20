function oblicz() {
	let rodzaj = document.getElementById('rodzaj').value
	let ilosc = document.getElementById('ilosc').value
	let wynik = document.getElementById('wynik')
	let koszt = 0
	
	if(rodzaj == 1) {
		koszt = ilosc * 4
	}
	if(rodzaj == 2) {
		koszt = ilosc * 3.5
	}
	wynik.innerHTML = "koszt paliwa: " + koszt + " zł"
}