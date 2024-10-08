<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request){
        $data = [];

        $listaProdutos = Product::all();
        $data['lista'] = $listaProdutos;

        return view("home", $data);
    }

    // Categorias com limit para mostrar 8 principais produtos
    public function categorias(Request $request)
{
    $data = [];

    // SELECT * FROM categorias
    $listaCategorias = Category::all();

    // SELECT * FROM produtos WHERE categoria_id = $idcategoria
    $listaProdutos = Product::limit(8)->get();

    $data["lista"] = $listaProdutos;
    $data["listaCategoria"] = $listaCategorias;
    
    return view("categoria", $data);
}

// Mostra os produtos de determinada categoria
public function categoriaProduto($idcategoria, Request $request)
{
    $data = [];

    // SELECT * FROM categorias
    $listaCategorias = Category::all();

    // SELECT * FROM produtos WHERE categoria_id = $idcategoria
    $listaProdutos = Product::where("category_id", $idcategoria)->get();

    $data["lista"] = $listaProdutos;
    $data["idcategoria"] = $idcategoria;
    $data["listaCategoria"] = $listaCategorias;

    return view("categoria_produto", $data);
}

public function adicionarCarrinho($idProduto = 0 ,Request $request) {
    $prod = Product::find($idProduto);

    if ($prod) {
        // Encontrou o produto

        //Buscar da sessao o carinho atual
        $carrinho = session('cart', []);

        array_push($carrinho, $prod);
        session(['cart' => $carrinho]);
    }

    return redirect()->route('home');
}

public function verCarrinho(Request $request){
    $carrinho =session('cart', []);
    $data = ['cart' => $carrinho];

    return view("carrinho", $data);
}

public function excluirCarrinho( $indice, Request $request){
    $carrinho =session('cart', []);

    if(isset($carrinho[$indice])){
        unset($carrinho[$indice]);
    }
        session(["cart" => $carrinho]);

    return redirect()->route("ver_carrinho");
}

}
