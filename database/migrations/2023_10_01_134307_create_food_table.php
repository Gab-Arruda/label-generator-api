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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("umidade")->nullable();
            $table->string("energia")->nullable();
            $table->string("proteina")->nullable();
            $table->string("lipideos")->nullable();
            $table->string("colesterol")->nullable();
            $table->string("carboidrato")->nullable();
            $table->string("fibra_alimentar")->nullable();
            $table->string("cinzas")->nullable();
            $table->string("calcio")->nullable();
            $table->string("magnesio")->nullable();
            $table->string("manganes")->nullable();
            $table->string("fosforo")->nullable();
            $table->string("ferro")->nullable();
            $table->string("sodio")->nullable();
            $table->string("potassio")->nullable();
            $table->string("cobre")->nullable();
            $table->string("zinco")->nullable();
            $table->string("retinol")->nullable();
            $table->string("re")->nullable();
            $table->string("rae")->nullable();
            $table->string("tiamina")->nullable();
            $table->string("riboflavina")->nullable();
            $table->string("piridoxina")->nullable();
            $table->string("niacina")->nullable();
            $table->string("vitamina_c")->nullable();
            $table->unsignedBigInteger("category_id");
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
