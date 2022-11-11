<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSertifikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('StudentID')->nullable();
            $table->string('judulsertifikat')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->string('tahun')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sertifikats');
    }
}
