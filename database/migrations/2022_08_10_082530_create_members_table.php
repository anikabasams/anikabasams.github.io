<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('satker_id')->nullable();
            $table->string('nama');
            $table->string('nik');
            $table->string('asal_kec');
            $table->string('asal_des');
            $table->string('nohp');
            $table->string('email');
            $table->string('npwp');
            $table->string('norek');
            $table->timestamps();
            $table->foreign('satker_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
