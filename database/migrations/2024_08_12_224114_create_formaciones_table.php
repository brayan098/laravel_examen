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
        Schema::create('formaciones', function (Blueprint $table) {
            $table->increments('id_formacion');
            $table->integer('id_empleado')->unsigned();
            $table->string('nivel_formacion', 100);
            $table->string('titulo', 100);
            $table->date('fecha_graduacion');
            $table->timestamps();

            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formaciones');
    }
};
