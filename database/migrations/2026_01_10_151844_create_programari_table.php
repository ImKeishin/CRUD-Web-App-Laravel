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
        Schema::create('programari', function (Blueprint $table) {
            $table->id('ProgramareID');
            
            $table->unsignedBigInteger('MedicID');
            $table->unsignedBigInteger('PacientID');
            
            $table->date('Data');
            $table->timestamps();

            $table->foreign('MedicID')->references('MedicID')->on('medici')->onDelete('cascade');
            $table->foreign('PacientID')->references('PacientID')->on('pacienti')->onDelete('cascade');
            
            $table->unique(['MedicID', 'PacientID', 'Data']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programare');
    }
};
