@extends('template')

@section('conteudo')

	<h2>
		Produtos 
		<a href="/produtos/create"><span class="btn btn-default glyphicon glyphicon-plus btn-sm" aria-hidden="true"></span></a>
    </h2>

	<br>
	
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<td align="center">Part Number</td>
				<td align="center">Descrição</td>
				<td align="center">NCM</td>
				<td align="center">Peso</td>
				<td align="center">Ação</td>
			</tr>
		</thead>
		<tbody>
			@foreach($produtos as $produto)
			<tr>
				<td align="center">{{ $produto->part_number }}</td>
				<td align="center">{{ $produto->descricao }}</td>
				<td align="center">{{ $produto->ncm }}</td>
				<td align="center">{{ $produto->peso }}</td>				
				<td align="center">
					<a href="/produtos/{{ $produto->id }}/destroy" class="btn-sm btn-danger">Remover</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/produtos/{{ $produto->id }}/edit" class="btn-sm btn-success">Editar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div align="center">{!! $produtos->render() !!}</div>

@endsection