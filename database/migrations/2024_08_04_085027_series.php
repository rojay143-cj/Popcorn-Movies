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
        Schema::create('series', function (Blueprint $table) {
            $table->id('ser_id');
            $table->foreignId('cast_id')->nullable();
            $table->foreignId('prod_id')->nullable();
            $table->foreignId('vid_id')->nullable();
            $table->foreignId('gen_id')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->string('title');
            $table->string('description');
            $table->string('release_date');
            $table->string('rt_score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
