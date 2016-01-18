@extends('template')

@section('conteudo')

	<h2>NF Entrada - Cadastro</h2>

	<br>

	@if ($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['url'=>'nfentradas/store','method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('nfe', 'Numero:') !!}
			{!! Form::text('nfe', null, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('serie_nfe', 'Série:') !!}
			{!! Form::text('serie_nfe', null, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('data_emissao', 'Data de Emissão:') !!}
			{!! Form::text('data_emissao', null, ['class'=>'form-control']) !!}
		</div>			

		<div class="form-group">
			{!! Form::label('id_parceiro', 'ID Parceiro:') !!}
			{!! Form::select('id_parceiro', $parceiros, ['class'=>'form-control']) !!}
		</div>	

		<br>

		<p>
			Itens da Nota Fiscal de Entrada
			<button class="btn btn-default glyphicon glyphicon-plus btn-sm" onclick="AddTableRow()" type="button"></button>
		</p>

		<table class="table table-striped table-bordered table-hover" id="tabela-itens">
			<thead>
				<tr>
					<td align="center" width="100px">Num Item</td>
					<td align="center">Part Number</td>
					<td align="center" width="100px">Quantidade</td>
					<td align="center" width="150px">Valor Unitário</td>
					<td align="center" width="150px">Ação</td>
				</tr>
			</thead>
			<tbody>
				<!-- Local onde entrará os itens da NF -->
			</tbody>
		</table>		

		<div class="form-group" align="center">
			{!! Form::submit('Cadastrar NF Entrada', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection