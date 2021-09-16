<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStnksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stnks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('telepon');
            $table->string('tanggal_lahir');
            $table->string('identitas_kendaraan');
            $table->string('nopol');
            $table->date('pajak_tahunan');
            $table->date('pajak_lima_tahun');
            $table->string('dibuat_oleh');
            $table->string('diupdate_oleh');
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
        Schema::dropIfExists('stnks');
    }
}
