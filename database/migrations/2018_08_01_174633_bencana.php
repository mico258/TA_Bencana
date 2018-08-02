<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bencana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('bencana', function (Blueprint $table) {
          $table->increments('id');
          $table->string('tipe_bencana');
          $table->string('waktu');
          $table->string('bujur');
          $table->string('lintang');
          $table->string('desa_kelurahan');
          $table->string('kecamatan');
          $table->string('kota_kabupaten');
          $table->string('provinsi');
          $table->string('korban');
          $table->string('kerugian_infrastruktur');
          $table->string('kerugian_ekonomi');
          $table->string('kerugian_pemukiman');
          $table->string('total_kerugian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bencana');
    }
}
