<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alterar recibo</title>
</head>
<body>
<header>cabeçalho</header>
<main>
	Alterar recibo
	<a href="/">voltar ao início</a>
	<form action="{{ route('update')}}" method="post" style="background: red;">
		@csrf
		@method('PUT')
		<label>ID_RECIBO</label>
		<input type="text" name="id" id="id" value="{{$receita->id}}">

		<label>Nome do Contribuinte</label>
		<input type="text" name="NOME" id="NOME" value="{{$receita->NOME}}">

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
		<input type="text" name="VALOR" id="VALOR" value="{{$receita->VALOR}}">

		<br>

		<label>Data</label>
		<input type="date" name="DATA" id="DATA" value="{{$receita->DATA}}">

		<button name="alterar">Alterar</button>
	</form>
</main>
<footer>rodape</footer>
</body>
</html>