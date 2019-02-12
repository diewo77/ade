<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_resultats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('resultat_id');
            $table->date('date_reception');
            $table->string('code');
            $table->string('adresse')->nullable();
            $table->string('result_1')->nullable();
            $table->boolean('valid_1')->default(0);
            $table->string('result_2')->nullable();
            $table->boolean('valid_2')->default(0);
            $table->string('result_3')->nullable();
            $table->boolean('valid_3')->default(0);
            $table->string('result_4')->nullable();
            $table->boolean('valid_4')->default(0);
            $table->string('result_5')->nullable();
            $table->boolean('valid_5')->default(0);
            $table->string('result_6')->nullable();
            $table->boolean('valid_6')->default(0);
            $table->string('result_7')->nullable();
            $table->boolean('valid_7')->default(0);
            $table->text('obs')->nullable();
            $table->timestamps();

            $table->foreign('resultat_id')
                ->references('id')->on('resultats')
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
        Schema::dropIfExists('sub_resultats');
    }
}
