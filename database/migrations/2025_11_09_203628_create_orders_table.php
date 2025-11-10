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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->comment('ID del usuario que realizó el pedido');

            $table->string('name')->comment('Nombre completo del cliente');
            $table->string('phone')->comment('Teléfono de contacto del cliente');
            $table->string('locality')->nullable()->comment('Localidad o sector de entrega');
            $table->text('address')->nullable()->comment('Dirección detallada del cliente o lugar de entrega');

            $table->string('city')->comment('Ciudad del pedido');
            $table->string('state')->comment('Provincia o estado');
            $table->string('country')->comment('País');
            $table->string('landmark')->nullable()->comment('Referencia o punto cercano para la entrega');
            $table->string('zip')->nullable()->comment('Código postal');

            $table->decimal('subtotal', 10, 2)->comment('Subtotal del pedido sin descuentos ni impuestos');
            $table->decimal('discount', 10, 2)->default(0)->comment('Descuento aplicado al pedido');
            $table->decimal('tax', 10, 2)->default(0)->comment('Impuestos aplicados al pedido');
            $table->decimal('total', 10, 2)->comment('Total final del pedido después de impuestos y descuentos');

            $table->string('type')->default('home')->comment('Tipo de entrega: home, office, etc.');
            
            $table->enum('status', ['ordered', 'delivered', 'canceled'])
                ->default('ordered')
                ->comment('Estado actual del pedido: ordered, delivered o canceled');

            $table->date('delivered_date')->nullable()->comment('Fecha en que el pedido fue entregado');
            $table->date('canceled_date')->nullable()->comment('Fecha en que el pedido fue cancelado');

            $table->boolean('is_shipping_different')->default(false)
                ->comment('Indica si la dirección de envío es diferente a la de facturación');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
