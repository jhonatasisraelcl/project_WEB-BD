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
