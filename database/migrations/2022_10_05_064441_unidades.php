<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  Unidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('unidades', function (Blueprint $table) {
            $table->bigIncrements('idUnidad');
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('placa');
            $table->string('marca');
            $table->string('modelo');
            $table->string('estilo'); 
            $table->string('color');     
            $table->string('traccion');
            $table->string('combustible');   
            $table->string('ayoFabricacion');//int
            $table->string('contratacion');
            $table->string('valorAdqui'); // double
            $table->string('valorHacienda');
            $table->string('estado');//boo
            $table->string('descripcion');
            $table->string('observacion');
            
          
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');   
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
