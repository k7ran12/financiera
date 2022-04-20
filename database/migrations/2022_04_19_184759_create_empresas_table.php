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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string("nombreEmpresa",50);
            $table->char("ruc", 11);
            $table->char("razon_social", 50);
            $table->string("logo",100);
            $table->string("correo",60);
            $table->char("celular", 13 );
            $table->char("celular1", 13 );
            $table->char("celular2", 13 );
            $table->char("direccion", 100)->nullable();
            $table->char("telefono", 13);
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
        Schema::dropIfExists('empresas');
    }
};
