<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;

class UpdateAuthColumnsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
        * @see App\Http\Controllers\SocialAuth for the reasoning behind this.
        */
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * For safety reasons, this down function does not perform any operations to fix
     * the issue in case of an exception.
     *
     * @throws QueryException if there are rows with NULL password in the database.
     * @return void
     */
    public function down()
    {
        try {
          Schema::table('users', function (Blueprint $table) {
              $table->string('password')->nullable(false)->change();
          });
        } catch (QueryException $e) {
          print('Password column cannot be changed to NOT NULL while rows with NULL passwords are present.');
          throw $e;
        }

    }
}
