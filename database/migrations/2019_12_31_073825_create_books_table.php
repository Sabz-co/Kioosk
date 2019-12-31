<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->text('image_src');
            $table->string('isbn', 20); // TODO apply database level formatting.
            $table->unsignedBigInteger('publisher_id');
            $table->unsignedInteger('page_count'); // No. of pages / page count.
            $table->text('description');
            $table->year('publish_year');
            $table->string('slug', 255);
            $table->timestamps();

            $table->foreign_key('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
