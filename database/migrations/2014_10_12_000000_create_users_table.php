<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('username')->nullable()->unique(); 
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('password_hash')->nullable();
            $table->string('password_salt')->nullable();
            $table->string('cedula',20)->nullable();
            $table->string('foto')->nullable();
            $table->string('telefono',25)->nullable();
            $table->string('celular',25)->nullable();
            $table->string('ocupacion',100)->nullable();
            $table->string('direccion')->nullable();
            $table->string('procedencia')->nullable();
            $table->text('perfil')->nullable();
            $table->date('fecha_nacimiento')->nullable();  
            $table->tinyInteger('activo')->length(1)->default(0);   
            $table->tinyInteger('pruebas')->length(1)->default(0);
            $table->integer('ciudad_id')->length(11)->default(0);            
            $table->integer('sexo_id')->length(11)->default(0);    
            $table->integer('codigo_confirmacion')->default(0);   
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
