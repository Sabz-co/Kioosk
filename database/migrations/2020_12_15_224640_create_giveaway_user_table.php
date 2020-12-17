<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiveawayUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaway_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('giveaway_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('owner_id');
            $table->timestamps();
            $table->foreign('giveaway')
            ->references('id')
            ->on('giveaways');
         $table->foreign('user_id')
            ->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giveaway_user');
    }
}
