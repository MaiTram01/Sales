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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->char('gender', 1);
            $table->string('email', 50)->unique();
            $table->string('address', 100);
            $table->string('phone_number', 20);
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
