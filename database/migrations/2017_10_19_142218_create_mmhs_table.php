<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mmhs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_jurusan')->unsigned();
            $table->string('nama',25);
            $table->string('alamat',50);
            $table->integer('tlp');
            $table->string('tempat_lahir',30);
            $table->date('tgl_lahir');
            $table->string('agama',11);
            $table->string('kwn',8);
            $table->string('nama_ortu',8);
            $table->string('alamat_ortu',25);
            $table->integer('tlp_ortu');

            $table->timestamps();
        });


        Schema::table('mmhs', function (Blueprint $table) {
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
        Schema::dropIfExists('mmhs');
    }
}
