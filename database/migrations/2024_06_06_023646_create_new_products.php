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
        $cat = new \App\Models\Category(['category' => 'Geral' ]);
        $cat->save();

        $prod = new \App\Models\Product(['name' => 'Mouse Logitech', 'value' => 619, 'photo' => 'imagens/produto1.jpg', 'descript' => '', 'category_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Product(['name' => 'Teclado Redragon', 'value' => 194, 'photo' => 'imagens/produto2.jpg', 'descript' => '', 'category_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Product(['name' => 'MousePad', 'value' => 109, 'photo' => 'imagens/produto3.jpg', 'descript' => '', 'category_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Product(['name' => 'HeatSet', 'value' => 159, 'photo' => 'imagens/produto4.jpg', 'descript' => '', 'category_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Product(['name' => 'Teclado Atack Shark', 'value' => 420, 'photo' => 'imagens/produto5.jpg', 'descript' => '', 'category_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Product(['name' => 'Mouse Atack Shark', 'value' => 130, 'photo' => 'imagens/produto6.jpg', 'descript' => '', 'category_id' => $cat->id]);
        $prod6->save();

        $prod7 = new \App\Models\Product(['name' => 'MousePad Fallen Ace', 'value' => 115, 'photo' => 'imagens/produto7.jpg', 'descript' => '', 'category_id' => $cat->id]);
        $prod7->save();

        $prod8 = new \App\Models\Product(['name' => 'HeatSet Astron a20', 'value' => 833, 'photo' => 'imagens/produto8.jpg', 'descript' => '', 'category_id' => $cat->id]);
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
