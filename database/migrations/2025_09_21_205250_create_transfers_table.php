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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('reference')->unique();
            $table->decimal('total', 15);
            $table->text('note')->nullable();
            //wharehouse origin
            $table->unsignedBigInteger('warehouse_origin_id');
            $table->foreign('warehouse_origin_id')->references('id')->on('warehouses')->onDelete('cascade');
            //wharehouse destination
            $table->unsignedBigInteger('warehouse_destination_id');
            $table->foreign('warehouse_destination_id')->references('id')->on('warehouses')->onDelete('cascade');
            //user
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
