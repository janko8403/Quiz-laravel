<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lng')->nullable();
            $table->string('long_lng')->nullable();
            $table->text('field_1')->nullable();
            $table->text('field_2')->nullable();
            $table->text('field_3')->nullable();
            $table->text('field_4')->nullable();
            $table->text('field_5')->nullable();
            $table->text('field_6')->nullable();
            $table->text('field_7')->nullable();
            $table->text('field_8')->nullable();
            $table->text('field_9')->nullable();
            $table->text('field_10')->nullable();
            $table->text('agenda')->nullable();
            $table->text('agenda_txt')->nullable();
            $table->text('prelegenci')->nullable();
            $table->text('competition')->nullable();
            $table->text('competition_1')->nullable();
            $table->text('competition_2')->nullable();
            $table->text('competition_3')->nullable();
            $table->text('contact')->nullable();
            $table->text('contact_txt')->nullable();
            $table->text('pdf')->nullable();
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
        Schema::dropIfExists('languages');
    }
}
