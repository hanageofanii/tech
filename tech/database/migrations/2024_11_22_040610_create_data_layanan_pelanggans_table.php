<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_layanan_pelanggans', function (Blueprint $table) {
            $table->id('id_data');
            $table->unsignedBigInteger('id_teknisi')->nullable(); 
            $table->foreign('id_teknisi')->references('id_teknisi')->on('teknisis')->onDelete('cascade');            
            $table->string('nama');
            $table->string('email');
            $table->string('no_hp');
            $table->text('alamat');   
            $table->unsignedBigInteger('id_jenis_layanan');
            $table->unsignedBigInteger('id_jenis_properti');
            $table->date('tanggal');
            $table->time('waktu');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_layanan_pelanggans', function (Blueprint $table) {
            // $table->dropForeign(['id_jenis_properti']);
            // $table->dropColumn('id_user');
        });
    }
};
