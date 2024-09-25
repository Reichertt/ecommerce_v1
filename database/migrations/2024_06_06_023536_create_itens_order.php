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
        Schema::create('itens_order', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("amount");
            $table->decimal("value", 10,2);
            $table->datetime("dt_item");
            
            $table->integer("product_id")->unsigned();
            $table->integer("order_id")->unsigned();

            $table->timestamps();

            $table->foreign("product_id")
                ->references("id")
                ->on("product")->onDelete("cascade");

                $table->foreign("order_id")
                ->references("id")
                ->on("order")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_order');
    }
};
