@extends('template')

@section('conteudo')

	<h2>
		NF Entrada: {{$nfe->nfe}}
    </h2>

	<br>
	{{$nfe->nfe}}-{{$nfe->serie_nfe}}-{{$nfe->data_emissao}}
	
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<td align="center">PART_NUMBER</td>
				<td align="center">QTDE</td>
				<td align="center">VALOR UNITARIO</td>
				<td align="center">VALOR_TOTAL</td>
			</tr>
		</thead>
		<tbody>
			@foreach($nfe->itensNfEntradas as $itemNfe)
			<tr>
				<td align="center">{{ $itemNfe->id_produto }}</td>
				<td align="center">{{ $itemNfe->quantidade }}</td>
				<td align="center">{{ $itemNfe->valor_unitario }}</td>
				<td align="center">{{ $itemNfe->quantidade * $itemNfe->valor_unitario }}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>


@endsection