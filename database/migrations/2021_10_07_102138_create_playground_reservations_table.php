<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaygroundReservationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playground_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('playground_id');
            $table->foreignId('user_id');

            $table->date('date');
            $table->time('time');
            $table->integer('number_of_people');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('playground_reservations');
    }
}