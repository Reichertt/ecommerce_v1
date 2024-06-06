@extends('layout')
@section('conteudo')

<div class="border border-dark">
            <h3 class="text-light mt-3">Carrinho</h3>
            @if (isset($cart) && count($cart) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Foto</th>
                            <th>Valor</th>
                            <th>Descricao</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $indice => $p)
                            <tr>
                                <td>{{ $p->nome }}</td>
                                    <td><img src="{{ asset($p->foto) }}" height="50" alt="Foto do produto no carrinho"></img></td>
                                <td>{{ $p->valor }}</td>
                                <td>{{ $p->descricao }}</td>
                                <td>
                                    <a href="{{ route('excluir_carrinho', ['indice' => $indice]) }}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-light text-center">Nenhum produto no seu carrinho.</p>
            @endif
</div>

@endsection
