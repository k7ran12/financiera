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
        Schema::create('ubigeo_peru_provincias', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('nombre', 45);
            $table->foreignId('ubigeo_peru_departamentos_id')->constrained();           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubigeo_peru_provincias');
    }
};
