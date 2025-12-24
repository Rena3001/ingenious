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
        Schema::create('night_vision_sections', function (Blueprint $table) {
            $table->id();
               /* =====================
               TITLES (MULTI-LANG)
            ====================== */
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            /* =====================
               DESCRIPTIONS (MULTI-LANG)
            ====================== */
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_zh')->nullable();

            /* =====================
               BUTTONS
            ====================== */
            $table->string('button_primary_url')->nullable();

            $table->string('button_secondary_url')->nullable();

            /* =====================
               IMAGE
            ====================== */
            $table->string('image')->nullable();

            /* =====================
               STATUS
            ====================== */
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('night_vision_sections');
    }
};
