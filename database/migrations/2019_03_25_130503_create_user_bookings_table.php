<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tour_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('phone');
            $table->text('description')->nullable();
            $table->integer('status')->default(0);
            $table->float('total_price');
            $table->integer('total_people');
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
        Schema::dropIfExists('user_bookings');
    }
}
