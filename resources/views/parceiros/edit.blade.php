@extends('template')

@section('conteudo')

	<h2>Parceiro - Modo de Edição</h2>

	<br>

	@if ($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['url'=>"parceiros/$parceiro->id/update", 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('cnpj', 'CNPJ:') !!}
			{!! Form::text('cnpj', $parceiro->cnpj, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', $parceiro->nome, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('endereco', 'Endereço:') !!}
			{!! Form::text('endereco', $parceiro->endereco, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('telefone', 'Telefone:') !!}
			{!! Form::text('telefone', $parceiro->telefone, ['class'=>'form-control']) !!}
		</div>					

		<div class="form-group">
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email', $parceiro->email, ['class'=>'form-control']) !!}
		</div>			

		<br>

		<div class="form-group" align="center">
			{!! Form::submit('Atualizar Parceiro', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection