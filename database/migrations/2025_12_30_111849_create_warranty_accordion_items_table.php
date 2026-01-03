<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('warranty_accordion_items', function (Blueprint $table) {
            $table->id();

            // Relation
            $table->foreignId('accordion_section_id')
                ->constrained('warranty_accordion_sections')
                ->cascadeOnDelete();

            // Title (21 / 22 / 23 / 24) — 7 languages
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            // Content / Description — 7 languages
            $table->text('content_az')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_de')->nullable();
            $table->text('content_fr')->nullable();
            $table->text('content_es')->nullable();
            $table->text('content_zh')->nullable();

            // Ordering
            $table->integer('sort_order')->default(0);

            // Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warranty_accordion_items');
    }
};
