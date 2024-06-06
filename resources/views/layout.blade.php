<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop - ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="resources/css/app.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-light navbar-expand-md bg-black px-5 mb-5">
        <a href="{{ route('home') }}" class="navbar-brand text-light">MyShop</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link text-light" href="{{ route('home') }}">HOME</a>
                <a class="nav-link text-light" href="{{ route('categorias') }}">Categorias</a>
                <a class="nav-link text-light" href="{{ route('register') }}">Cadastrar</a>
                <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
            </div>
        </div>
        <a href="{{ route('ver_carrinho') }}" class="btn btn-sm text-light"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            @if ($message = Session::get('err'))
                <div class="col-12">
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                </div>
            @endif

            @if ($message = Session::get('ok'))
                <div class="col-12">
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                </div>
            @endif
            <!-- Nesta DIV teremos uma area onde os outros arquivos irao adicionar conteudo-->
            @yield('conteudo')
        </div>
    </div>
</body>

</html>
