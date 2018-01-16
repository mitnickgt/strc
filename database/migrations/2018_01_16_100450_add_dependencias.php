<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDependencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
//            Aqui va todo lo de la tabla 
            
            $table->increments('id');
            $table->string('Dependencia');
            $table->string('Siglas')->nullable();
            
            $table->timestamps(); // Aqui se crean las 2 primeras bandera 
            $table->softDeletes(); // Aqui va la tercer bandera
            
//            Aqui van las banderas para los usuarios que afectan 
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->integer('deleted_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependencias');
    }
}
