<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_video_items', function (Blueprint $table) {
            $table->id();

            /* =====================
               RELATION TO SECTION
            ====================== */
            $table->foreignId('product_video_section_id')
                  ->constrained()
                  ->cascadeOnDelete();

            /* =====================
               CATEGORY (FILTER)
               24.2 → 27.1
            ====================== */
            $table->enum('category', [
                'all',
                'security',
                'home_appliances',
                'electrical_equipment',
                'consumer_electronics',
            ])->index();

            /* =====================
               PRODUCT IMAGE – 28
            ====================== */
            $table->string('image')->nullable();

            /* =====================
               PRODUCT TITLE – 28.1
            ====================== */
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            /* =====================
               PRODUCT SHORT DESCRIPTION – 28.2
            ====================== */
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_zh')->nullable();

            /* =====================
               VIDEO CTA – 28.3
            ====================== */
            $table->string('video_url')->nullable(); // YouTube link

            /* =====================
               SORT + STATUS
            ====================== */
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_video_items');
    }
};
