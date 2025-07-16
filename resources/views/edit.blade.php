@extends('layouts.main')
@section('titulo', 'ADPAN - alterar recibo')
@section('conteudo')
	<h1>Alterar recibo</h1>
	<a href="/" class="action">voltar ao início</a>
	<form action="{{ route('update')}}" method="post">
		@csrf
		@method('PUT')
		<label>ID_RECIBO</label>
		<input type="text" name="id" id="id" value="{{$receita->id}}">

		<label>Nome do Contribuinte</label>
		<input type="text" name="NOME" id="NOME" value="{{$receita->NOME}}">

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
		<input type="text" name="VALOR" id="VALOR" value="{{$receita->VALOR}}">

		<br>

		<label>Data</label>
		<input type="date" name="DATA" id="DATA" value="{{$receita->DATA}}">

		<button name="alterar">Alterar</button>
	</form>
@endsection