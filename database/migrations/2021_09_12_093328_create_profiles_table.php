<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->date('dateofbirth');
            $table->string('placeOfBirth');
            $table->integer('age');
            $table->float('height',2);
            $table->string('nationality');
            $table->bigInteger('phone');
            $table->bigInteger('whatsappnumber');
            $table->string('footballpost');
            $table->string('strongfoot');
            $table->string('playeragent');
            $table->string('currentclub');
            $table->date('teamdateentry');
            $table->date('datecontractend');
            $table->unsignedBigInteger('user_id')->index();
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
        Schema::dropIfExists('profiles');
    }
}
