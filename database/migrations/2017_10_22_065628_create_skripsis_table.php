<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('skripsis', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_mhs')->unsigned();
            $table->integer('id_dsn')->unsigned();
            $table->string('judul',80);
            $table->timestamps();
        });


  Schema::table('skripsis', function (Blueprint $table) {
    $table->foreign('id_dsn')->references('id_dosen')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
});
          Schema::table('skripsis', function (Blueprint $table) {
    $table->foreign('id_mhs')->references('id')->on('mmhs')->onDelete('cascade')->onUpdate('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skripsis');
    }
}
