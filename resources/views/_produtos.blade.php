@if (isset($lista))
    <div class="row d-flex justify-content-center align-items-center">
        @foreach ($lista as $prod)
            <div class="card m-2 bg-black" style="width: 18rem; height: 27rem;">
                <img src="{{ asset($prod->photo) }}" class="img-thumbnail img-fluid mt-3" alt="mouse"
                    style="height: 250px">
                <div class="pt-5">
                    <h5 class="card-title text-light">{{ $prod->name }} - Valor: R${{ $prod->value }}</h5>
                    <a href="{{ route('adicionar_carrinho', ['idproduto' => $prod->id]) }}"
                        class="btn btn-primary">Adicionar item</a>
                </div>
            </div>
        @endforeach
    </div>

@endif
