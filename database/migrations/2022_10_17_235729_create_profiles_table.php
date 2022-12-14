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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('github')->nullable()->unique();
            $table->string('profissao')->nullable()->unique();
            $table->string('linkedin')->nullable()->unique();
            $table->string('instagram')->nullable()->unique();
            $table->string('site')->nullable()->unique();
            $table->string('cep')->nullable(false);
            $table->string('estado')->nullable(false);
            $table->string('cidade')->nullable(false);
            $table->string('logradouro')->nullable(false);
            $table->string('numero')->nullable(false);
            $table->string('complemento')->nullable();
            $table->string('celular')->nullable();
            $table->string('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
