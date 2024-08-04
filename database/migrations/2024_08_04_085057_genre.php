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
        Schema::create('genre', function (Blueprint $table) {
            $table->id('gen_id');
            $table->enum('genre_name', [
                'Action', 
                'Adventure', 
                'Animation', 
                'Biography', 
                'Comedy', 
                'Crime', 
                'Drama', 
                'Fantasy', 
                'Historical', 
                'Horror', 
                'Musical', 
                'Mystery', 
                'Romance', 
                'Sci-Fi', 
                'Thriller', 
                'War', 
                'Western', 
                'Documentary', 
                'Family', 
                'Sport', 
                'Superhero'
            ]);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre');
    }
};
