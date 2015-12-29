@extends('template')

@section('conteudo')

	<h2>NCM - Cadastro</h2>

	<br>

	@if ($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['url'=>'ncm/store']) !!}

		<div class="form-group">
			{!! Form::label('ncm', 'NCM:') !!}
			{!! Form::text('ncm', null, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', null, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('ii', 'II:') !!}
			{!! Form::text('ii', null, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('ipi', 'IPI:') !!}
			{!! Form::text('ipi', null, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('pis', 'PIS:') !!}
			{!! Form::text('pis', null, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('cofins', 'COFINS:') !!}
			{!! Form::text('cofins', null, ['class'=>'form-control']) !!}
		</div>			

		<br>

		<div class="form-group" align="center">
			{!! Form::submit('Criar NCM', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection