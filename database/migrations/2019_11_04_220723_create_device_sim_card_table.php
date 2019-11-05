<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceSimCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_sim_card', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('sim_card_id');
            $table->boolean('active')->default(false);
            $table->timestamps();

            $table->unique(['device_id', 'sim_card_id']);

            $table->foreign('device_id')
                ->references('id')
                ->on('devices')
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
        Schema::dropIfExists('device_sim_card');
    }
}
