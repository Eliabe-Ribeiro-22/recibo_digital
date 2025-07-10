@extends('layouts.main')
@section('titulo', 'ADPAN - novo recibo')
@section('conteudo')

	<h1>cadastrar novo recibo</h1>
	<a href="/">voltar ao início</a>
	<form action="/salvar" method="post" style="background: red;">
		@csrf
		<label>ID_RECIBO</label>
		<input type="text" value="0" name="id_recibo" id="id_recibo">

		<label>Nome do Contribuinte</label>
		<input type="text" name="NOME" id="NOME">

		<br>
		<label>Tipo de receita</label>
		<select name="TIPO">
			<option value="dizimo">Dízimo</option>
			<option value="coleta">Coleta</option>
			<option value="missao">Missão</option>
			<option value="oferta">Oferta</option>
			<option value="voto">Voto</option>
		</select>

		<label>Valor</label>
		<input type="text" name="VALOR" id="VALOR">

		<br>

		<label>Data</label>
		<input type="date" name="DATA" id="DATA">

		<button name="salvar">Cadastrar</button>
	</form>
@endsection