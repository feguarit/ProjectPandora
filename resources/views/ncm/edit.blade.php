@extends('template')

@section('conteudo')

	<h2>NCM - Modo de Edição</h2>

	<br>

	@if ($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['url'=>"ncm/$ncm->id/update", 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('ncm', 'NCM:') !!}
			{!! Form::text('ncm', $ncm->ncm, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', $ncm->descricao, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('ii', 'II:') !!}
			{!! Form::text('ii', $ncm->ii, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('ipi', 'IPI:') !!}
			{!! Form::text('ipi', $ncm->ipi, ['class'=>'form-control']) !!}
		</div>					

		<div class="form-group">
			{!! Form::label('pis', 'PIS:') !!}
			{!! Form::text('pis', $ncm->pis, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('cofins', 'COFINS:') !!}
			{!! Form::text('cofins', $ncm->cofins, ['class'=>'form-control']) !!}
		</div>			

		<br>

		<div class="form-group" align="center">
			{!! Form::submit('Atualizar NCM', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection