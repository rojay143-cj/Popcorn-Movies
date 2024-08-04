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
        Schema::create('production', function (Blueprint $table) {
            $table->id('prod_id');
            $table->string('director');
            $table->string('screenwriter');
            $table->string('gaffer');
            $table->string('producer');
            $table->string('editor');
            $table->string('designer');
            $table->string('cinematographer');
            $table->string('composer');
            $table->string('sound_designer');
            $table->string('production_manager');
            $table->string('costume_designer');
            $table->string('makeup_artist');
            $table->string('visual_effects_supervisor');
            $table->string('casting_director');
            $table->string('location_manager');
            $table->string('production_assistant');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production');
    }
};
