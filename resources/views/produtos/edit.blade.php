@extends('template')

@section('conteudo')

	<h2>Produto - Modo de Edição</h2>

	<br>

	@if ($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['url'=>"produtos/$produto->id/update", 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('part_number', 'Part Number:') !!}
			{!! Form::text('part_number', $produto->part_number, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', $produto->descricao, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('ncm', 'NCM:') !!}
			{!! Form::text('ncm', $produto->ncm, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('peso', 'Peso:') !!}
			{!! Form::text('peso', $produto->peso, ['class'=>'form-control']) !!}
		</div>				

		<br>

		<div class="form-group" align="center">
			{!! Form::submit('Atualizar Produto', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection