<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneNumberSimCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_number_sim_card', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('phone_number_id');
            $table->unsignedBigInteger('sim_card_id');
            $table->timestamps();

            $table->unique(['phone_number_id', 'sim_card_id']);

            $table->foreign('phone_number_id')
                ->references('id')
                ->on('phone_numbers')
                ->onDelete('cascade');

            $table->foreign('sim_card_id')
                ->references('id')
                ->on('sim_cards')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phone_number_sim_card');
    }
}
