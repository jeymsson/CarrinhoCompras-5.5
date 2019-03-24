@extends('layout')
@section('pagina_titulo', 'HOME')
@section('pagina_conteudo')

<div class="container">
	<div class="row">
	@foreach($registro as $reg)
		<div class="col s12 m6 l4">
			<div class="card medium">
				<div class="card-image">
					<img src="{{ $reg->imagem }}">
				</div>
				<div class="card-content">
					<span class="card-title grey-text text-darken-4 truncate" title="{{ $reg->nome }}">{{ $reg->nome }}</span>
				</div>
				<div class="card-action">
					<span class="blue-text" href="{{ route('produto', $reg->id) }}">Veja mais informações</span>
				</div>
			</div>
		</div>
	@endforeach
	</div>
</div>
@endsection