<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('home_abouts', function (Blueprint $table) {
            $table->id();

            // Title
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();

            // Description
            $table->longText('desc_az')->nullable();
            $table->longText('desc_en')->nullable();
            $table->longText('desc_ru')->nullable();
            $table->longText('desc_de')->nullable();
            $table->longText('desc_es')->nullable();

            // Image (optional)
            $table->string('image')->nullable();

            // Status
            $table->boolean('is_active')->default(true);
 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_abouts');
    }
};
