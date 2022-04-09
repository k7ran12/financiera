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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->float("monto", 8,2);
            $table->float("interes", 8,2);
            $table->integer("num_cuota");
            $table->char("tipo_moneda", 3);
            $table->dateTimeTz('fecha_registro', $precision = 0);
            $table->dateTimeTz("fecha_inicio", $precision = 0);
            $table->float("monto_x_cuota", 8,2);
            $table->float("total_interes", 8, 2);
            $table->float("monto_total", 8 ,2);
            $table->text("clausula")->nullable();
            $table->boolean("estado_prestamo");
            $table->integer("numero_operacion");
            $table->timestamps();            
            $table->foreignId('clientes_id')->constrained();
            $table->foreignId('users_id')->constrained();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
};
