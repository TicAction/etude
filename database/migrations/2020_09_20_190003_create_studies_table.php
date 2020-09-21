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
            $table->boolean('group')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reading')->nullable();
            $table->string('vocabulary')->nullable();
            $table->string('grammary')->nullable();
            $table->string('verbs')->nullable();
            $table->string('math')->nullable();
            $table->string('english')->nullable();
            $table->string('oral')->nullable();
            $table->string('history')->nullable();
            $table->string('science')->nullable();
            $table->longtext('other')->nullable();
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
