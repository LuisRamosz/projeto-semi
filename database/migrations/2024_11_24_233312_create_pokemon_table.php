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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', '200'); //200 é o tamanho solicitado
            $table->string('type', 100);
            $table->text('image');
            $table->foreignId('coach_id')->references('id')->on('coaches');
            $table->integer('power');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};