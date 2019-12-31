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
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            // URL-friendly title used to generate paths, used along with
            // author id to support changing and similar slugs.
            $table->string('slug', 50);
            // To avoid limiting the system, city column is an string instead of
            // an enum, however, it may be a good idea to provide users with a
            // select rather than having them type (possibly different) iterations
            // of the same name.
            $table->string('location', 50);
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
