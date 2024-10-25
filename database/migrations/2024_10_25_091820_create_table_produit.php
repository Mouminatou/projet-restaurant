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
        Schema::create('table_produit', function (Blueprint $table) {
            $table->id();
            //titre M. Mme
            $table->timestamps();
            
            $table-> chaine ('sokhna' ,30);
            $table-> chaine ('Description' ,100);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_produit');
    }
};
