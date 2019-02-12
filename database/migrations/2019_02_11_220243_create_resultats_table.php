<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('centre_id');
            $table->date('date_document');
            $table->date('date_prelevement')->nullable()->default(null);
            $table->date('date_passage')->nullable()->default(null);
            $table->date('date_lecture')->nullable()->default(null);
            $table->string('nom_preleveur')->nullable()->default(null);
            $table->string('passage_par')->nullable()->default(null);
            $table->string('lecture_par')->nullable()->default(null);
            $table->string('confirme_par')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('centre_id')
                ->references('id')->on('centres')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultats');
    }
}
