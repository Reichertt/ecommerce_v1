@extends('layout')
@section('conteudo')
    <div class="col-2">
        <div class="list-group">
            @if (isset($listaCategoria) && count($lista) > 0)
                    <a href="{{ route('categorias') }}" class="list-group-item list-group-item-action mb-2 border border-dark">Todas</a>
                    @foreach ($listaCategoria as $cat)
                        <a href="{{ route('categoria_por_id', ['categoria' => $cat->id]) }}" class="list-group-item list-group-item-action mb-2 border border-dark @if($cat->id == $idcategoria) active @endif">{{ $cat->categoria }}</a>
                    @endforeach
            @else
                <h4 class="mt-5">Desculpe, essa categoria nao possui produtos</h4>
            @endif
        </div>
    </div>
    <div class="col-10">
        @include('_produtos', ['lista' => $lista])
    </div>
@endsection
