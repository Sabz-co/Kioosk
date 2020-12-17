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
            $table->primary(['giveaway_id','user_id']);
            $table->bigInteger('giveaway_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->unsignedInteger('owner_id');
            $table->timestamps();
            $table->foreign('giveaway_id')
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
