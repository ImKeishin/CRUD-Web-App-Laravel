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
        Schema::create('pacienti', function (Blueprint $table) {
            $table->id('PacientID');
            $table->string('NumePacient');
            $table->string('PrenumePacient');
            $table->string('Adresa');
            $table->boolean('Asigurare')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacient');
    }
};
