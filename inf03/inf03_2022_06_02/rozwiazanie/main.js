function oblicz() {
    const rodzajPaliwa = +document.getElementById("rodzaj").value
    const iloscLitrow = +document.getElementById("ilosc").value
    const wynik = document.getElementById("wynik")
    let cena = 0
    if (rodzajPaliwa == 1) {
        cena = 4
    }
    if (rodzajPaliwa == 2) {
        cena = 3.5
    }
    wynik.innerHTML = "koszt paliwa: " + cena * iloscLitrow + " zł"
}