<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('alamat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->foreignId('jabatan_id')->constrained('jabatans')->onDelete('cascade');
            $table->foreignId('departemen_id')->constrained('departemens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
