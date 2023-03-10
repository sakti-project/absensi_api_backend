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
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('name');
            $table->string('position');
            $table->decimal('latitude', 12, 5);
            $table->decimal('longitude', 12, 5);
            $table->date('tanggal');
            $table->time('masuk');
            $table->time('pulang');
            $table->string('buktipresensi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi');
    }
};
