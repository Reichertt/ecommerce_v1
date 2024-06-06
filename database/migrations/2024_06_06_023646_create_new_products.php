<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Geral' ]);
        $cat->save();

        $prod = new \App\Models\Produto(['nome' => 'Mouse Logitech', 'valor' => 619, 'foto' => 'imagens/produto1.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Produto(['nome' => 'Teclado Redragon', 'valor' => 194, 'foto' => 'imagens/produto2.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome' => 'MousePad', 'valor' => 109, 'foto' => 'imagens/produto3.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome' => 'HeatSet', 'valor' => 159, 'foto' => 'imagens/produto4.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome' => 'Teclado Atack Shark', 'valor' => 420, 'foto' => 'imagens/produto5.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome' => 'Mouse Atack Shark', 'valor' => 130, 'foto' => 'imagens/produto6.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod6->save();

        $prod7 = new \App\Models\Produto(['nome' => 'MousePad Fallen Ace', 'valor' => 115, 'foto' => 'imagens/produto7.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod7->save();

        $prod8 = new \App\Models\Produto(['nome' => 'HeatSet Astron a20', 'valor' => 833, 'foto' => 'imagens/produto8.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod8->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
