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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('warehouse_id');
            //llave foranea al warehouse
            $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            //llave foranea al product
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('quantity_in')->default(0);
            $table->integer('quantity_out')->default(0);
            $table->string('type');
            $table->decimal('cost_in', 15, 2)->default(0);
            $table->decimal('total_in', 15, 2)->default(0);
            $table->decimal('cost_out', 15, 2)->default(0);
            $table->decimal('total_out', 15, 2)->default(0);
            $table->decimal('quantity_balance', 15, 2)->default(0);
            $table->decimal('cost_balance', 15, 2)->default(0);
            $table->decimal('total_balance', 15, 2)->default(0);
            $table->date('date');
            $table->string('inventorytable_id');
            $table->string('inventorytable_type');
            $table->text('notes')->nullable();
            $table->string('detail')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
