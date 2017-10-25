<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNnilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nnilais', function (Blueprint $table) {
          $table->increments('id_nilai')->unsigned();
            $table->integer('id_makul')->unsigned();
            $table->integer('id_mhs')->unsigned();
            $table->char('tugas',4);
            $table->char('UTS',4);
            $table->char('UAS',4);
            $table->string('mutu',4);
            $table->timestamps();


        });
         Schema::table('nnilais', function (Blueprint $table) {
    $table->foreign('id_makul')->references('id_mk')->on('makuls')->onDelete('cascade')->onUpdate('cascade');
});
          Schema::table('nnilais', function (Blueprint $table) {
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
        Schema::dropIfExists('nnilais');
    }
}
