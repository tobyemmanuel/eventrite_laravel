<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventName')->nullable();
            $table->string('eventStartDate')->nullable();
            $table->string('eventStartDateTime')->nullable();
            $table->string('eventEndDate')->nullable();
            $table->string('eventEndDateTime')->nullable();
            $table->string('eventPrice')->nullable();
            $table->string('eventLocation')->nullable();
            $table->string('eventDesc', 5000)->nullable();
            $table->string('eventBanner')->nullable();
            $table->string('refund')->nullable();
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
        Schema::dropIfExists('events');
    }
}
