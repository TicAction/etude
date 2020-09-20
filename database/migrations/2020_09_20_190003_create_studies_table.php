<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('group');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reading');
            $table->string('vocabulary');
            $table->string('grammary');
            $table->string('verbs');
            $table->string('math');
            $table->string('english');
            $table->string('oral');
            $table->string('history');
            $table->string('science');
            $table->longtext('other');
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
        Schema::dropIfExists('studies');
    }
}
