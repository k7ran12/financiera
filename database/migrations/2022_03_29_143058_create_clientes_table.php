<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->char("NumDoc", 15)->unique();
            $table->string("Region");
            $table->string("Provincia");
            $table->string("Distrito");
            $table->text("Direccion");
            $table->char("NumTelefono" , 15);
            $table->string("CorreoElec");
            $table->foreignId('tipodocumentos_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
