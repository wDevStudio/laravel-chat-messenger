<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessengerFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messenger_files', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('message_id');
            $table->string('path');
            $table->string('file_name');
            $table->string('url');
            $table->string('thumb');
            $table->timestamps();
            $table->foreign('message_id')->references('id')->on('messages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messenger_files');
    }
}
