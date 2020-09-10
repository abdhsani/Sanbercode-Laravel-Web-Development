<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi');
            $table->date('tanggal_dibuat');
            $table->bigInteger('jawaban_id')->unsigned();
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
            $table->bigInteger('profil_id')->unsigned();
            $table->foreign('profil_id')->references('id')->on('profil');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_jawaban');
        $table->dropForeign(['jawaban_id']);
        $table->dropForeign(['profil_id']);

        


    }
}
