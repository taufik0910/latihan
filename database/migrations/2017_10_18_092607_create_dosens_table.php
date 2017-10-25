<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id_dosen')->unsigned();
            $table->integer('id_jurusan')->unsigned();
            $table->string('nama_dosen',30);
            $table->integer('telp_dosen');
            $table->string('alamat',50);

            $table->timestamps();
        });

 Schema::table('dosens', function (Blueprint $table) {
    $table->foreign('id_jurusan')->references('id')->on('jurusans')->onDelete('cascade')->onUpdate('cascade');
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
}
