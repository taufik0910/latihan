<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQjadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('qjadwals', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_mhs')->unsigned();
            $table->integer('id_makul')->unsigned();
            $table->string('hari');
            $table->date('jam');
            $table->timestamps();
        });


  Schema::table('qjadwals', function (Blueprint $table) {
    $table->foreign('id_makul')->references('id_mk')->on('makuls')->onDelete('cascade')->onUpdate('cascade');
});
          Schema::table('qjadwals', function (Blueprint $table) {
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
        Schema::dropIfExists('qjadwals');
    }
}
