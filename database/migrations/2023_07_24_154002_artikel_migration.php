<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('artikel', function (Blueprint $table) {
        $table->id();
        $table->string('judul', 255)->nullable(false);
        $table->text('konten')->nullable(true);
        $table->string('penulis', 100)->nullable(true);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
