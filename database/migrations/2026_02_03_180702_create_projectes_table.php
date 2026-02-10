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
        Schema::create('projectes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('project_code')->unique();
            $table->enum('state', ['PLANIFICACIO', 'EN_CURS', 'PAUSAT', 'FINALIZAT', 'CANCELAT']);
            $table->date('begin_date')->nullable();
            $table->date('previst_end_date')->nullable();
            $table->date('real_end_date')->nullable();
            $table->integer('estimate_budget_hours')->unsigned();
            $table->decimal('real_budget_hours')->default(0);
            $table->foreignId('client_id')->constrained();
            $table->foreignId('gestor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectes');
    }
};
