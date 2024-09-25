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
        Schema::create('address', function (Blueprint $table) {
            $table->increments("id");
            $table->string("address");
            $table->string("number");
            $table->string("city");
            $table->string("state");
            $table->string("cep");
            $table->string("complement")->nullable();
            $table->integer("users_id")->unsigned();

            $table->timestamps();

            $table->foreign("users_id")
                ->references("id")->on("users")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
