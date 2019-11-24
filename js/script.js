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

function CD1a(){
	var total = document.getElementById("valorfinal").value;
	if (total == "") {
		total = 61;
	}
	else {
		total = parseInt(total)
		total = total + 61;		
	}
	document.getElementById("valorfinal").value = total;
}
function CD1d(){
	var total = document.getElementById("valorfinal").value;
	if (total > 0) {
		total = parseInt(total);
		total = total - 61;
	}
	if (total > 0) {
		document.getElementById("valorfinal").value = total;
	}else{
		document.getElementById("valorfinal").value = total;
	}
}
function CD2a(){
	var total = document.getElementById("valorfinal").value;
	if (total == "") {
		total = 152;
	}
	else {
		total = parseInt(total)
		total = total + 152;		
	}
	document.getElementById("valorfinal").value = total;
}
function CD2d(){
	var total = document.getElementById("valorfinal").value;
	if (total > 0) {
		total = parseInt(total);
		total = total - 152;
	}
	if (total > 0) {
		document.getElementById("valorfinal").value = total;
	}else{
		document.getElementById("valorfinal").value = total;
	}
}
function CD3a(){
	var total = document.getElementById("valorfinal").value;
	if (total == "") {
		total = 301;
	}
	else {
		total = parseInt(total)
		total = total + 301;		
	}
	document.getElementById("valorfinal").value = total;
}
function CD3d(){
	var total = document.getElementById("valorfinal").value;
	if (total > 0) {
		total = parseInt(total);
		total = total - 301;
	}
	if (total > 0) {
		document.getElementById("valorfinal").value = total;
	}else{
		document.getElementById("valorfinal").value = total;
	}
}
function CD4a(){
	var total = document.getElementById("valorfinal").value;
	if (total == "") {
		total = 256;
	}
	else {
		total = parseInt(total)
		total = total + 256;		
	}
	document.getElementById("valorfinal").value = total;
}
function CD4d(){
	var total = document.getElementById("valorfinal").value;
	if (total > 0) {
		total = parseInt(total);
		total = total - 256;
	}
	if (total > 0) {
		document.getElementById("valorfinal").value = total;
	}else{
		document.getElementById("valorfinal").value = total;
	}
}
function CD5a(){
	var total = document.getElementById("valorfinal").value;
	if (total == "") {
		total = 152;
	}
	else {
		total = parseInt(total)
		total = total + 152;		
	}
	document.getElementById("valorfinal").value = total;
}
function CD5d(){
	var total = document.getElementById("valorfinal").value;
	if (total > 0) {
		total = parseInt(total);
		total = total - 152;
	}
	if (total > 0) {
		document.getElementById("valorfinal").value = total;
	}else{
		document.getElementById("valorfinal").value = total;
	}
}
function CD6a(){
	var total = document.getElementById("valorfinal").value;
	if (total == "") {
		total = 152;
	}
	else {
		total = parseInt(total)
		total = total + 152;		
	}
	document.getElementById("valorfinal").value = total;
}
function CD6d(){
	var total = document.getElementById("valorfinal").value;
	if (total > 0) {
		total = parseInt(total);
		total = total - 152;
	}
	if (total > 0) {
		document.getElementById("valorfinal").value = total;
	}else{
		document.getElementById("valorfinal").value = total;
	}
}