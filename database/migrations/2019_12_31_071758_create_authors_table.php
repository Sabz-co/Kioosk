<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Creates the Authors table.
     *
     * @see App\Author
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('first_name');
            $table->text('last_name');
            // URL-friendly title used to generate paths, used along with
            // author id to support changing and similar slugs.
            $table->text('slug');
            // To avoid limiting the system, city column is an string instead of
            // an enum, however, it may be a good idea to provide users with a
            // select rather than having them type (possibly different) iterations
            // of the same name.
            $table->text('location')->nullable();
            $table->text('website')->nullable();
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
        Schema::dropIfExists('authors');
    }
}
