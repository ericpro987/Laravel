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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('assignat_a')->foreign('assignat_a')->references('id')->on('users')->onDelete('cascade');
            $table->string('creat_per')->foreign('creat_per')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->string('titol');
            $table->text('descripcio');
            $table->string('codi_ticket')->unique();
            $table->enum('tipus',['TASCA','ERROR','MILLORA','CONSULTA']);
            $table->enum('prioritat',['BAIXA','MITJA','ALTA','CRITICA']);
            $table->enum('estat', ['NOU','ASSIGNAT','EN_PROGRES','EN_REVISIO','TANCAT']);
            $table->integer('hores_estimades')->unsigned();
            $table->decimal('hores_reals')->default(0);
            $table->date('data_creacio');
            $table->date('data_deadline')->nullable();
            $table->date('data_tancament')->nullable();
            $table->string('projecte_id')->constrained('projects');
            $table->string('ticket_pare_id')->constrained('tickets')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
