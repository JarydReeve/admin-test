<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomstatusTable extends Migration
{
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('roomstatus', function (Blueprint $table) {
            $table->increments('roomstatusID', true);
            $table->string('building');
            $table->string('name');
            $table->string('last');
            $table->string('roomtype');
            $table->integer('numberofgueststaying');
            $table->string('roomtype');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('roomstatus');
    }

}
