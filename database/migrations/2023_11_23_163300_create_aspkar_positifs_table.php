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
        Schema::create('aspkar_positifs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('tingkat');
            $table->string('bab');
            $table->string('variabel');
            $table->string('sub_bab');
            $table->string('indikator');
            $table->string('no');
            $table->string('keterangan');
            $table->string('item');
            $table->decimal('bobot', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspkar_positifs');
    }
};
