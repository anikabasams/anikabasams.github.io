<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('nik');
            $table->unsignedBigInteger('activity_id');
            $table->string('jabatan');
            $table->decimal('harga', 15);
            $table->integer('beban');
            $table->decimal('total', 15);
            $table->timestamps();
            $table->foreign('nik')->references('nik')->on('members');
            $table->foreign('activity_id')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
