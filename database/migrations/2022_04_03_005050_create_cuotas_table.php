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
        Schema::create('cuotas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->date('fecha_limite');
            $table->float("monto",8,2);
            $table->integer("numero");
            $table->boolean("estado");
            $table->float("interes",8,2);
            $table->float("total",8,2);
            $table->timestamps();    
            $table->foreignId('prestamos_id')->constrained()->onDelete('cascade');                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuotas');
    }
};
