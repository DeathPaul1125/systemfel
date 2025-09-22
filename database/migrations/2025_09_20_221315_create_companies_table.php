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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('trade_name')->nullable();
            $table->string('admin')->nullable();
            $table->string('address')->nullable();
            $table->string('nit')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('logo')->nullable();

            $table->string('user_fel')->nullable();
            $table->string('password_fel')->nullable();
            $table->string('token_fel')->nullable();
            $table->boolean('prod')->nullable();

            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
