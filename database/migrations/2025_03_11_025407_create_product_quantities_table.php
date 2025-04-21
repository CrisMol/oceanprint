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
        Schema::create('product_quantities', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->unique()->comment('Cantidad de unidades disponible, por ejemplo: 100, 200, 500');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_quantities');
    }
};
