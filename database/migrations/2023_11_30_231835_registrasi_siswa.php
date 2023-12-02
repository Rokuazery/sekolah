<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('registrasi_siswa', function (Blueprint $table) {
            $table->id()->primary;
            $table->string('nama', 64);
            $table->string('alamat', 256)->nullable(true);
            $table->string('jenis_kelamin', 16)->nullable(true);
            $table->string('agama', 18)->nullable(true);
            $table->string('sekolah_asal', 64);
            $table->string('username', 50);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrasi_siswa');
    }
};
