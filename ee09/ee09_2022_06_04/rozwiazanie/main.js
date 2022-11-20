/* Dla początkujących *

const p1 = document.getElementById('p1')
const p2 = document.getElementById('p2')
const p3 = document.getElementById('p3')
let idZamowienia = 0

function sprawdz() {
	if (p1.innerHTML == 0) p1.style = "background-color: red;"
	if (p1.innerHTML >= 1 && p1.innerHTML <= 5) p1.style = "background-color: yellow;"
	if (p1.innerHTML > 5) p1.style = "background-color: Honeydew;"
	if (p2.innerHTML == 0) p2.style = "background-color: red;"
	if (p2.innerHTML >= 1 && p2.innerHTML <= 5) p2.style = "background-color: yellow;"
	if (p2.innerHTML > 5) p2.style = "background-color: Honeydew;"
	if (p3.innerHTML == 0) p3.style = "background-color: red;"
	if (p3.innerHTML >= 1 && p3.innerHTML <= 5) p3.style = "background-color: yellow;"
	if (p3.innerHTML > 5) p3.style = "background-color: Honeydew;"
}

function aktualizuj(produkt) {
	let nowaIlosc = prompt('Podaj nową ilość:')
	sprawdz()
}

function zamow(produkt) {
	idZamowienia++
	alert('Zamówienie nr: ' + idZamowienia + ' Produkt: ' + produkt)
}
sprawdz()

//*/


/* Dla kumatych */

const iloscProduktow = document.querySelectorAll('.ilosc')
const nazwaProduktow = document.querySelectorAll('.produkt')
const aktualizujPrzycisk = document.querySelectorAll('.aktualizuj')
const zamowPrzycisk = document.querySelectorAll('.zamow')
let idZamowienia = 0

function sprawdz() {
	iloscProduktow.forEach((produkt) => {
		if (produkt.innerHTML == 0) produkt.style = 'background-color: red;'
		if (produkt.innerHTML >=1 && produkt.innerHTML <=5) produkt.style = 'background-color: yellow;'
		if (produkt.innerHTML > 5) produkt.style = 'background-color: Honeydew;'
	})
}

aktualizujPrzycisk.forEach((przycisk, i) => {
	przycisk.addEventListener('click', () => {
		let nowaIlosc = prompt('Podaj nową ilość:')
		iloscProduktow[i].innerHTML = nowaIlosc
		sprawdz()
	})
})

zamowPrzycisk.forEach((przycisk, i) => {
	przycisk.addEventListener('click', () => {
		idZamowienia++
		alert('Zamówienie nr: ' + idZamowienia + ' Produkt: ' + nazwaProduktow[i].innerHTML)
	 })
 })
 
 sprawdz()
 
 //*/