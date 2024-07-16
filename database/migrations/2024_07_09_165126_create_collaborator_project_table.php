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
        Schema::create('collaborator_project', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('collaborator_id');
            $table->foreign('collaborator_id')
            ->references('id')
            ->on('collaborators')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')
            ->references('id')
            ->on('projects')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('collaborator_project');
    }
};
