@extends('template')

@section('conteudo')

	<h2>
		Parceiros 
		<a href="/parceiros/create"><span class="btn btn-default glyphicon glyphicon-plus btn-sm" aria-hidden="true"></span></a>
    </h2>

	<br>
	
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<td align="center">CNPJ</td>
				<td align="center">Nome</td>
				<td align="center">Endereço</td>
				<td align="center">Telefone</td>
				<td align="center">Email</td>
				<td align="center">Ação</td>
			</tr>
		</thead>
		<tbody>
			@foreach($parceiros as $parceiro)
			<tr>
				<td align="center">{{ $parceiro->cnpj }}</td>
				<td align="center">{{ $parceiro->nome }}</td>
				<td align="center">{{ $parceiro->endereco }}</td>
				<td align="center">{{ $parceiro->telefone }}</td>
				<td align="center">{{ $parceiro->email }}</td>
				<td align="center">
					<a href="/parceiros/{{ $parceiro->id }}/destroy" class="btn-sm btn-danger">Remover</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/parceiros/{{ $parceiro->id }}/edit" class="btn-sm btn-success">Editar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div align="center">{!! $parceiros->render() !!}</div>

@endsection