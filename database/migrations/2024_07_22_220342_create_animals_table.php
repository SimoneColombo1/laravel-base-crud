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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string("Nome");
            $table->string("Specie");
            $table->tinyInteger("Eta")->unsigned();
            $table->string("DataArrivo");
            $table->tinyInteger("Peso")->unsigned();
            $table->string("Sesso");
            $table->string("habitat");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};