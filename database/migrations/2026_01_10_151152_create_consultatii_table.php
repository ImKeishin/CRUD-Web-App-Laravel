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
        Schema::create('consultatii', function (Blueprint $table) {
            $table->id('ConsultatieID');

            $table->unsignedBigInteger('PacientID');
            $table->unsignedBigInteger('MedicamentID');

            $table->string('Diagnostic');
            $table->string('DozaMedicament');

            $table->timestamps();

            $table->foreign('PacientID')->references('PacientID')->on('pacienti')->onDelete('cascade');
            $table->foreign('MedicamentID')->references('MedicamentID')->on('medicamente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultatie');
    }
};
