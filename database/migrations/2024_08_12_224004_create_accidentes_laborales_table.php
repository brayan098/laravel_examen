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
        Schema::create('accidentes_laborales', function (Blueprint $table) {
            $table->increments('id_accidente');
            $table->integer('id_empleado')->unsigned();
            $table->date('fecha_accidente');
            $table->string('descripcion', 255);
            $table->string('causa', 255);
            $table->timestamps();

            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidentes_laborales');
    }
};
