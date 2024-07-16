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
        Schema::create('projects', function (Blueprint $table) {    
            $table->id();
            $table->string('codigo');
            $table->integer('cuantia');
            $table->string('descripcion');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');

            $table->unsignedBigInteger('client_id')->nullable();;
            $table->foreign('client_id')
            ->references('id')
            ->on('clients')
            ->onDelete('cascade')
            ->unUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
    */
    
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
