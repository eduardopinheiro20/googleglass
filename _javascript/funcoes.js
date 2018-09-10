
function mudaFoto (foto){
	document.getElementById("icone").src = foto;
}

/*Função da pagina fale-conosco.html*/
 function calc_total(){
    var qtd = parseInt(document.getElementById('cQtd').value);
    tot = qtd * 1500;
    document.getElementById('cTot').value = tot;
 }