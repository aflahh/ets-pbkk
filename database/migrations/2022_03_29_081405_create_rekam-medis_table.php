<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam-medis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokter_id');
            $table->foreignId('pasien_id');
            $table->string('kondisi');
            $table->string('suhu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekam-medis');
    }
};
