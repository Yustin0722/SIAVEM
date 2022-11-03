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
        //
        Schema::create('licencias', function (Blueprint $table) {
            $table->bigIncrements('idLicencia');
            $table->bigInteger('TL_id')->unsigned();
            $table->date('FechaVencimiento');
            $table->string('FotoLicencia');
            $table->timestamps();

            $table->foreign('TL_id')->references('idTL')->on('tlicencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
