<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Updateuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->string('firstname', 100)->nullable();
            $table->string('nickname', 100);
            $table->string('city', 100)->nullable();
            $table->bigInteger('avatar_id')->unsigned();
            // $table->foreign('avatar_id')->references('id')->on('avatars');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('avatar_id')->references('id')->on('avatars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign(['avatar_id']);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar_id');
            $table->dropColumn('city');
            $table->dropColumn('nickname');
            $table->dropColumn('firstname');
        });

    }
}
