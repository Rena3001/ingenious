<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('warranty_feature_items', function (Blueprint $table) {
            $table->id();

            // Relation
            $table->foreignId('feature_section_id')
                ->constrained('warranty_feature_sections')
                ->cascadeOnDelete();

            // Icon class (fontawesome / custom)
            $table->string('icon')->nullable();

            // Title (7 languages)
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            // Text / Description (7 languages)
            $table->text('text_az')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_ru')->nullable();
            $table->text('text_de')->nullable();
            $table->text('text_fr')->nullable();
            $table->text('text_es')->nullable();
            $table->text('text_zh')->nullable();

            // Ordering
            $table->integer('sort_order')->default(0);

            // Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warranty_feature_items');
    }
};
