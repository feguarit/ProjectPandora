@extends('template')

@section('conteudo')

	<h2>
		NF Entradas 
		<a href="/nfentradas/create"><span class="btn btn-default glyphicon glyphicon-plus btn-sm" aria-hidden="true"></span></a>
    </h2>

	<br>
	
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<td align="center">NFE</td>
				<td align="center">Série</td>
				<td align="center">Data de Emissão</td>
				<td align="center">Parceiro</td>
				<td align="center">Ação</td>
			</tr>
		</thead>
		<tbody>
			@foreach($nfentradas as $nfentrada)
			<tr>
				<td align="center">{{ $nfentrada->nfe }}</td>
				<td align="center">{{ $nfentrada->serie_nfe }}</td>
				<td align="center">{{ $nfentrada->data_emissao }}</td>
				<td align="center">{{ $nfentrada->id_parceiro }}</td>
				<td align="center">
					<a href="/nfentradas/{{ $nfentrada->id }}/destroy" class="btn-sm btn-danger">Remover</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/nfentradas/{{ $nfentrada->id }}/edit" class="btn-sm btn-success">Editar</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/nfentradas/{{ $nfentrada->id }}/show" class="btn-sm btn-primary">EXIBIR</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div align="center">{!! $nfentradas->render() !!}</div>

@endsection