<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->foreignId('type_id')->constrained('type_products')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->float('unit_price');
            $table->float('promotion_price')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('unit', 255);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
