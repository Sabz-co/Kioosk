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
            $table->text('thumb')->nullable();
            $table->string('isbn', 20)->nullable(); // TODO apply database level formatting.
            $table->unsignedBigInteger('publisher_id')->nullable();
            // $table->unsignedBigInteger('author_id')->nullable();
            // $table->unsignedBigInteger('translator_id')->nullable();
            $table->unsignedInteger('page_count')->nullable(); // No. of pages / page count.
            $table->text('description')->nullable();
            $table->unsignedInteger('publish_year')->nullable();
            $table->text('slug');
            $table->timestamps();

            $table->foreign('publisher_id')->references('id')->on('publishers');
            // $table->foreign('author_id')->references('id')->on('authors');
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
