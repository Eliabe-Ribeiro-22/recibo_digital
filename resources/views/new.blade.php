@extends('layouts.main')
@section('titulo', 'ADPAN - novo recibo')
@section('conteudo')

	<h1>cadastrar novo recibo</h1>
	<a href="/" class="action">voltar ao início</a>
	<form action="/salvar" method="post" id="nova-receita">
		@csrf
		<div class="grupo">
			<label class="size">ID_recibo</label>
			<input type="text" value="0" name="id_recibo" id="id_recibo">

			<label class="size">Nome do Contribuinte</label>
			<input type="text" name="NOME" id="NOME">
		</div>
		<div class="grupo">
			<label class="size">Tipo de receita</label>
			<select name="TIPO">
				<option value="dizimo">Dízimo</option>
				<option value="coleta">Coleta</option>
				<option value="missao">Missão</option>
				<option value="oferta">Oferta</option>
				<option value="voto">Voto</option>
			</select>
		
			<label class="size">Valor</label>
			<input type="text" name="VALOR" id="VALOR">
		</div>
		
		<div class="grupo">
			<label class="size">Data</label>
			<input type="date" name="DATA" id="DATA">
		</div>
		<button name="salvar" id="btn-salvar">Cadastrar</button>
	</form>
@endsection