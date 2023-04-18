<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->index();
            ;
            $table->string('lastname');
            $table->string('nama');
            $table->integer('kelas')->default(0);
            $table->integer('nis')->default(0);
            $table->string('jurusan');
            $table->string('email');
            $table->string('alamat');
            $table->string('ttl');
            $table->string('mobile')->default(0);
            $table->string('image')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};