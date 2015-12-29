@extends('template')

@section('conteudo')

	<h2>Parceiro - Cadastro</h2>

	<br>

	@if ($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['url'=>'parceiros/store']) !!}

		<div class="form-group">
			{!! Form::label('cnpj', 'CNPJ:') !!}
			{!! Form::text('cnpj', null, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', null, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('endereco', 'Endereço:') !!}
			{!! Form::text('endereco', null, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('telefone', 'Telefone:') !!}
			{!! Form::text('telefone', null, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email', null, ['class'=>'form-control']) !!}
		</div>	

		<br>

		<div class="form-group" align="center">
			{!! Form::submit('Cadastrar Parceiro', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection