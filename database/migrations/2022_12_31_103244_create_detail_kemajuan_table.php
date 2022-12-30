<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKemajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kemajuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kemajuan');
            $table->foreign('id_kemajuan')->references('id')->on('kemajuan');
            $table->unsignedBigInteger('id_bab');
            $table->foreign('id_bab')->references('id')->on('bab');
            $table->string('keterangan');
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
        Schema::dropIfExists('detail_kemajuan');
    }
}
