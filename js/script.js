// a fução aumenta e diminui fazem a atualização do valor
function aumenta(a){
	var valor = document.getElementById(a).value;
	if(valor == "") {
        valor = 1;
    }
	else{
		valor = parseInt(valor);
		valor++;
	}
	document.getElementById(a).value = valor;
}

function diminui(a){
	var valor = document.getElementById(a).value;
	if(valor > 0) {
		valor = parseInt(valor);
		valor--;
	}
	document.getElementById(a).value = valor;
}