<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilecomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilecoms', function (Blueprint $table) {
            $table->increments('pid');
           // $table->integer('r_id')->unsigned();
           // $table->foreign('id')->references('logins')->on('id');
           $table->string('pid');
           $table->string('specialization');
           $table->string('mark');
           $table->string('institute');
            $table->string('experience');
            $table->string('mark1');
            $table->string('intrest');
            $table->string('status'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profilecoms');
    }
}
