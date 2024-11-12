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
        Schema::create('products_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_product');
            $table->double('price');
            $table->integer('gty');
            $table->string('image',150);
            $table->string('description',300);
            $table->string('desc',1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_details');
    }
};
