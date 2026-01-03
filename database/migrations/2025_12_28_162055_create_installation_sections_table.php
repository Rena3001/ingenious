<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('installation_sections', function (Blueprint $table) {
            $table->id();

            // ===== TITLE (70) =====
            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            // ===== DESCRIPTION (70.1) =====
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_zh')->nullable();

            // ===== CTA BUTTON (74) =====

            $table->string('cta_link')->nullable(); // #technical-support

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('installation_sections');
    }
};
