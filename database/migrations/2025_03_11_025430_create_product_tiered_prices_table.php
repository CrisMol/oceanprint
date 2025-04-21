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
        Schema::create('product_tiered_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->comment('ID del producto asociado');
            $table->unsignedBigInteger('variation_id')->nullable()->comment('ID de la variación, puede ser null si no tiene variaciones');
            $table->unsignedBigInteger('quantity_id')->comment('ID de la cantidad predefinida');
            $table->decimal('regular_price')->comment('Precio normal por unidad basado en la cantidad y variación');
            $table->decimal('sale_price')->nullable()->comment('Precio promocion por unidad basado en la cantidad y variación');
            $table->boolean('is_popular')->default(false)->comment('Indica si el precio es el más popular');

            // Llaves foráneas
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('variation_id')->references('id')->on('product_variations')->onDelete('set null');
            $table->foreign('quantity_id')->references('id')->on('product_quantities')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tiered_prices');
    }
};
