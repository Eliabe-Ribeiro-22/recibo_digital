<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Novo recibo</title>
</head>
<body>
<header>cabeçalho</header>
<main>
	cadastrar novo recibo
	<a href="/">voltar ao início</a>
	<form action="" method="get" style="background: red;">
		<label>ID_RECIBO</label>
		<input type="text" value="0" name="id_recibo" id="id_recibo">

		<label>Nome do Contribuinte</label>
		<input type="text" name="nome" id="nome">

		<br>
		<label>Tipo de receita</label>
		<select>
			<option>Dízimo</option>
			<option>Coleta</option>
			<option>Missão</option>
			<option>Oferta</option>
			<option>Voto</option>
		</select>

		<label>Valor</label>
		<input type="text" name="valor" id="valor">

		<br>

		<label>Data</label>
		<input type="data" name="dia_recibo" id="dia_recibo">

		<button name="salvar">Cadastrar</button>
	</form>
</main>
<footer>rodape</footer>
</body>
</html>