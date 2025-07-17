@extends('layouts.main')
@section('titulo', 'ADPAN - alterar recibo')
@section('conteudo')
	<h1>Alterar recibo</h1>
	<a href="/" class="action">voltar ao início</a>
	<form action="{{ route('update')}}" method="post" id="editar-receita">
		@csrf
		@method('PUT')
		<div class="grupo">
			<label class="size">ID_RECIBO</label>
			<input type="text" name="id" id="id" value="{{$receita->id}}">

			<label class="size">Nome do Contribuinte</label>
			<input type="text" name="NOME" id="NOME" value="{{$receita->NOME}}">
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
			<input type="text" name="VALOR" id="VALOR" value="{{$receita->VALOR}}">
		</div>

		<div class="grupo">
			<label class="size">Data</label>
			<input type="date" name="DATA" id="DATA" value="{{$receita->DATA}}">
			<button name="alterar" id="btn-editar">Alterar</button>
		</div>
	</form>
@endsection