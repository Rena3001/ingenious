<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('warranty_accordion_sections', function (Blueprint $table) {
            $table->id();

            // Background image (19)
            $table->string('background_image')->nullable();

            // Section title (20) — 7 languages
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            // CTA EMAIL (25)
            $table->string('cta_email')->nullable(); 
            // example: support@bamoone.com

            // Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warranty_accordion_sections');
    }
};
