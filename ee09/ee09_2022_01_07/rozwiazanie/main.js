function zmienImg(src) {
	let zmiana = document.getElementById("zmiana");
	zmiana.src = src;
}

let zmiana = 0;

function polubZmien() {
	zmiana++;
	let polub = document.getElementById("polub");
	if(zmiana % 2 == 0) polub.src = "icon-off.png"
	else polub.src = "icon-on.png";
}