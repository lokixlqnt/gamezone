<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {

            // $table->unique('email');
            $table->string('email',127)->change();
            // $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();

        });


        // Schema::table('password_resets', function (Blueprint $table){

        //     $table->string('email');
        // });

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $table->dropUnique(['email']);
        Schema::dropIfExists('password_resets');
    }
}
