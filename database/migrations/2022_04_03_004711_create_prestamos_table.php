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
            $table->float("capital", 8,2);
            $table->float("tea", 8,2);
            $table->integer("num_cuota");
            $table->char("tipo_moneda", 3);
            $table->dateTimeTz('fecha_registro', $precision = 0);
            $table->date("fecha_inicio", $precision = 0);
            $table->float("monto_x_cuota", 8,2);
            $table->float("total_interes", 8, 2);
            $table->float("capital_total", 8 ,2);
            $table->text("clausula")->nullable();
            $table->boolean("estado_prestamo");
            $table->string("numero_operacion");
            $table->string("form_pago", 20);
            $table->float("saldo", 8,2);   
            $table->char('clientes_id', 15);        
            $table->foreign('clientes_id')->references('NumDoc')->on('clientes')->onDelete('cascade');
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('prestamos');
    }
};
