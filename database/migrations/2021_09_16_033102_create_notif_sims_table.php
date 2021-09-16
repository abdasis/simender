<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifSimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notif_sims', function (Blueprint $table) {
            $table->id();
            $table->longText('pendaftaran')->nullable();
            $table->longText('satu_bulan')->nullable();
            $table->longText('satu_minggu')->nullable();
            $table->longText('jatuh_tempo')->nullable();
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
        Schema::dropIfExists('notif_sims');
    }
}
