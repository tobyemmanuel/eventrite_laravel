<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eventreg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventreg', function (Blueprint $table) {
            $table->id();
            $table->string('regName')->nullable();
            $table->string('regEmail')->nullable();
            $table->string('regNoTickets')->nullable();
            $table->string('eventId')->nullable();
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
        //
    }
}
