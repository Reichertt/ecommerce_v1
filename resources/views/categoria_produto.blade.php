@extends('layout')
@section('conteudo')
    <div class="col-2">
        <div class="list-group">
            @if (isset($listaCategoria) && count($lista) > 0)
                    <a href="{{ route('categorias') }}" class="list-group-item list-group-item-action mb-2 border border-light text-light" style="background-color: rgba(17, 24, 39)">Todas</a>
                    @foreach ($listaCategoria as $cat)
                        <a href="{{ route('categoria_por_id', ['category' => $cat->id]) }}" class="list-group-item list-group-item-action mb-2 border border-light text-light @if($cat->id == $idcategoria) active @endif" style="background-color: rgba(17, 24, 39)">{{ $cat->category }}</a>
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
