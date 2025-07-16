<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMPRIMIR RECIBO</title>
	<style>
		h1{
			text-align: center;
		}
		p{
			text-align: center;
			font-size: 1rem;
		}
		/*para quebra de página*/
		.page-break{
			page-break-after: always;
		}
	</style>
</head>
<body>
	<!-- <p>Página 1</p> -->
	<hr><br><br><br>
	
	<!-- Primeira Via -->
	<p>
		IGREJA EVANGÉLICA ASSEMBLÉIA DE DEUS DE PONTE ALTA DO NORTE
		<br>
		CNPJ: 11.101.212/0001-81
		<br>
		RUA 30 DE MARÇO Nº 61 – SÃO SEBASTIÃO 
		<br>
		PONTE ALTA DO NORTE – CEP 89535-000
		<br>
		E-MAIL: adpontealtadonorte@gmail.com
		<br>FACEBOOK: AD Ponte
	</p>
		<h1>Impressão de Recibo digital nº 00{{$receita->id}}</h1>
		<p>Nome do Contribuinte: {{$receita->NOME}}</p>
		<p>Valor: {{$receita->VALOR}},00</p>
		<p>Tipo de contribuição: {{$receita->TIPO}}</p>
		<p>Data de emissão: {{$receita->DATA}}</p>

		<p>1ª Via - Contribuinte</p>
		<p style="font-size: 0.8rem; text-align: right;">Desenvolvido por Eliabe Ribeiro Mota. 2025-2025</p>
	<br><hr><br>
	
	<!-- Segunda via -->
	<p>
		IGREJA EVANGÉLICA ASSEMBLÉIA DE DEUS DE PONTE ALTA DO NORTE
		<br>
		CNPJ: 11.101.212/0001-81
		<br>
		RUA TRINTA DE MARÇO Nº 61 – SÃO SEBASTIÃO 
		<br>
		PONTE ALTA DO NORTE – CEP 89535-000
		<br>
		E-MAIL: adpontealtadonorte@gmail.com
		<br>FACEBOOK: AD Ponte
	</p>
		<h1>Impressão de Recibo digital nº {{$receita->id}}</h1>
		<p>Nome do Contribuinte: {{$receita->NOME}}</p>
		<p>Valor: {{$receita->VALOR}},00</p>
		<p>Tipo de contribuição: {{$receita->TIPO}}</p>
		<p>Data de emissão: {{$receita->DATA}}</p>

	<p>2ª Via - Contabilidade</p>
	<p style="font-size: 0.8rem; text-align: right;">Desenvolvido por Eliabe Ribeiro Mota. 2025-2025</p>
	<!-- se precisasse de página 2 -->
	<!-- <div class="page-break"></div> -->
	 <!-- <p>Página 2</p> -->
</body>
</html>