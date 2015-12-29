@extends('template')

@section('conteudo')

	<h2>Produto - Cadastro</h2>

	<br>

	@if ($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['url'=>'produtos/store']) !!}

		<div class="form-group">
			{!! Form::label('part_number', 'Part Number:') !!}
			{!! Form::text('part_number', null, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', null, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('ncm', 'NCM:') !!}
			{!! Form::select('ncm', $ncms) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('peso', 'Peso:') !!}
			{!! Form::text('peso', null, ['class'=>'form-control']) !!}
		</div>				

		<br>

		<div class="form-group" align="center">
			{!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection