<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTilangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tilangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tanggal_lahir');
            $table->string('telepon');
            $table->date('waktu_sidang' );
            $table->longText('tempat_sidang');
            $table->string('pasal_pelanggaran');
            $table->string('identitas_kendaraan');
            $table->string('nopol');
            $table->boolean('diambil')->default(0);
            $table->string('briva')->nullable();
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
        Schema::dropIfExists('tilangs');
    }
}
