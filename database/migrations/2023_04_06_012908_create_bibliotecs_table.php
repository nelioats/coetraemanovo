<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliotecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotecs', function (Blueprint $table) {
            $table->id();

            $table->string('organizacao');
            $table->string('tipomaterial');
            $table->string('titulo');
            $table->text('resumo');
            $table->string('autores');
            $table->string('orientadores');
            $table->date('anopublicacao');
            $table->string('parceiro');
            $table->string('filepublicacao_path');

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
        Schema::dropIfExists('bibliotecs');
    }
}
