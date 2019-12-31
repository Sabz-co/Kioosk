<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslatorBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translator_book', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('translator_id');
          $table->unsignedBigInteger('book_id');
          $table->timestamps();

          $table->foreign_key('translator_id')->references('id')->on('authors')->onDelete('cascade');
          $table->foreign_key('book_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translator_book');
    }
}
