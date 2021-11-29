<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('email', 150);
            $table->char('telefone', 25);
            $table->char('celular', 25);
            $table->string('endereco');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube',)->nullable();
            $table->string('linkedin')->nullable();
            $table->string('tiktok')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
