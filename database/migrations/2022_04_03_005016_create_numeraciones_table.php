<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('numeraciones', function (Blueprint $table) {
            $table->id();
            $table->char("codigo", 4);            
            $table->timestamps();
        });
        
        DB::statement('ALTER TABLE numeraciones ADD correlacion INT(6) UNSIGNED ZEROFILL NOT NULL');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numeraciones');
    }
};
