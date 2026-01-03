<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->id();

            /* ===============================
               CATEGORY
            =============================== */
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->cascadeOnDelete();

            /* ===============================
               PRODUCT / GUIDE NAME (7 LANG)
            =============================== */
            $table->string('product_name_az');
            $table->string('product_name_en')->nullable();
            $table->string('product_name_ru')->nullable();
            $table->string('product_name_de')->nullable();
            $table->string('product_name_es')->nullable();
            $table->string('product_name_fr')->nullable();
            $table->string('product_name_zh')->nullable();

            /* ===============================
               MODEL CODE
            =============================== */
            $table->string('model_code')->nullable(); 
            // BO1-1-10MB

            /* ===============================
               MEDIA
            =============================== */
            $table->string('video_embed_url'); // iframe src
            $table->string('video_watch_url'); // CTA link

            /* ===============================
               SHORT DESCRIPTION (7 LANG)
            =============================== */
            $table->text('description_az');
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_zh')->nullable();

            /* ===============================
               STATUS & DATE
            =============================== */
            $table->boolean('is_active')->default(true);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
