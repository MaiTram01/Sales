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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->date('date_order');
            $table->double('total');
            $table->string('payment', 200);
            $table->string('note', 500)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('bills');
    }
};
