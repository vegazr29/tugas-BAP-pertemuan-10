<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('DosenID')->nullable();
            $table->string('nama_dosen')->nullable();
            $table->string('nama_matakuliah')->nullable();
            $table->string('kode_matakuliah')->nullable();
            $table->string('tahun_ajar')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dosens');
    }
}
