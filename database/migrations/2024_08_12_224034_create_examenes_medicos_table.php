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
        Schema::create('examenes_medicos', function (Blueprint $table) {
            $table->increments('id_examen');
            $table->integer('id_empleado')->unsigned();
            $table->string('tipo_examen', 100);
            $table->date('fecha_examen');
            $table->string('resultado', 255);
            $table->timestamps();

            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examenes_medicos');
    }
};
