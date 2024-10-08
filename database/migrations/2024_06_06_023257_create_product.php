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
        Schema::create('product', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name", 100);
            $table->decimal("value", 10,2);
            $table->string("photo", 100)->nullable();
            $table->string("descript", 255)->nullable();
            $table->integer("category_id")->unsigned();
            $table->timestamps();

            $table->foreign("category_id")
                ->references("id")->on("categories")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
