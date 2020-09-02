<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',124)->nullable();
            $table->string('dominio',100)->nullable();
            $table->text('descripcion')->nullable();  
            $table->text('slogan')->nullable();    
            $table->string('pais',100)->nullable();    
            $table->integer('pais_id')->length(11)->default(0);                  
            $table->string('logo',150)->nullable();
            $table->string('favicon',150)->nullable();
            $table->string('imagen1')->nullable();            
            $table->softDeletes();                   
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
        Schema::dropIfExists('fuentes');
    }
}
