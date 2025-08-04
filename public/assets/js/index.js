function validar_recibo(){
	// capturando dados do formulario
	let nome = document.querySelector("#nome_recibo").value;
	let valor = document.querySelector("#valor_recibo").value;
	let data = document.querySelector("#data_recibo").value;

	// verificando se o campo esta vazio
	if(nome == ""){
		alert("Faltou preencher o nome");
		nome.focus();
		return false;
	}
	if(valor == ""){
		alert("Faltou preencher o valor do recibo digital");
		valor.focus();
		return false;
	}
	if(data == ""){
		alert("Faltou preencher a data do recibo");
		data.focus();
		return false;
	}
	alert("Todos os dados foram preenchidos com sucesso");
	return true;
}