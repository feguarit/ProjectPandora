@extends('template')

@section('conteudo')

	<h2>
		NCM 
		<a href="/ncm/create"><span class="btn btn-default glyphicon glyphicon-plus btn-sm" aria-hidden="true"></span></a>
    </h2>

	<br>
	
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<td align="center">NCM</td>
				<td align="center">Descrição</td>
				<td align="center">II</td>
				<td align="center">IPI</td>
				<td align="center">PIS</td>
				<td align="center">COFINS</td>
				<td align="center">Ação</td>
			</tr>
		</thead>
		<tbody>
			@foreach($ncms as $ncm)
			<tr>
				<td align="center">{{ $ncm->ncm }}</td>
				<td align="center">{{ $ncm->descricao }}</td>
				<td align="center">{{ $ncm->ii }}</td>
				<td align="center">{{ $ncm->ipi }}</td>
				<td align="center">{{ $ncm->pis }}</td>
				<td align="center">{{ $ncm->cofins }}</td>
				<td align="center">
					<a href="/ncm/{{ $ncm->id }}/destroy" class="btn-sm btn-danger">Remover</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/ncm/{{ $ncm->id }}/edit" class="btn-sm btn-success">Editar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div align="center">{!! $ncms->render() !!}</div>

@endsection