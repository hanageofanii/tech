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
        Schema::create('pelacak_pelanggans', function (Blueprint $table) {
            $table->id('id_pelacak_pelanggan'); // Primary key
            $table->unsignedBigInteger('id_teknisi');
            $table->unsignedBigInteger('id_jenis_layanan');
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreignId('id')->constrained('users')->cascadeOnDelete();  // Foreign key for 'id' referencing 'users' table
            $table->decimal('total_biaya', 10, 2);
            $table->enum('status', ['done', 'cancel', 'proses'])->default('proses');
            $table->timestamps();

            // Foreign keys for other relationships
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans')->onDelete('cascade');
            $table->foreign('id_teknisi')->references('id_teknisi')->on('teknisis')->onDelete('cascade');
            $table->foreign('id_jenis_layanan')->references('id_jenis_layanan')->on('jenis_layanans')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelacak_pelanggans');
    }
};
