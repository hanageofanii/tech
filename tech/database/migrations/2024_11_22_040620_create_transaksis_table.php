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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_teknisi');
            $table->unsignedBigInteger('id_jenis_layanan');
            $table->unsignedBigInteger('id_jenis_properti');
            $table->unsignedBigInteger('id'); 
            $table->string('nama');
            $table->decimal('total_biaya', 10, 2);
            $table->enum('status', ['progress', 'cancel', 'done'])->default('progress');
            $table->timestamps();
    
            // Add foreign key constraints
            $table->foreign('id_teknisi')->references('id_teknisi')->on('teknisis')->onDelete('cascade');
            $table->foreign('id_jenis_layanan')->references('id_jenis_layanan')->on('jenis_layanans')->onDelete('cascade');
            $table->foreign('id_jenis_properti')->references('id_jenis_properti')->on('jenis_propertis')->onDelete('cascade');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            // $table->dropForeign(['id_jenis_properti']);
            // $table->dropColumn('id_user');
        });
    }
};
