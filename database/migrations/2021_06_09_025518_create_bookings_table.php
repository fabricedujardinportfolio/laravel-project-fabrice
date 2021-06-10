<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->text('booking_at')->nullable();
            $table->text('info')->nullable();
            $table->foreignId('doctor_id')->constrained('doctors');
            $table->foreignId('sick_id')->constrained('sicks');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("bookings" ,function(Blueprint $table){
            $table->dropConstrainedForeignId("doctor_id");
            $table->dropConstrainedForeignId("sick_id");
        });
        Schema::dropIfExists('bookings');
    }
}
