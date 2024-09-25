@extends('layout')
@section('conteudo')
    <h1 class="text-light">Selecione a categoria que deseja ver!</h1>
    <div class="col-2">
        <div class="list-group">
            @if (isset($listaCategoria) && count($listaCategoria) > 0)
                    @foreach ($listaCategoria as $cat)
                       <a href="{{ route('categoria_por_id', ['category' => $cat->id]) }}" class="list-group-item list-group-item-action mb-2 border border-light text-light" style="background-color: rgba(17, 24, 39)">{{ $cat->category }}</a>
                    @endforeach
            @endif
        </div>
    </div>

    <div class="col-10">
        @include('_produtos', ['lista' => $lista])
    </div>
@endsection
