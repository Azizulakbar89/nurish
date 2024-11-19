<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('ebook', function (Blueprint $table) {
        $table->id('idb');
        $table->string('judul');
        $table->string('kelas');
        $table->string('dokumen', 255)->nullable();
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('ebook');
}

};