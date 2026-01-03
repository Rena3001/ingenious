<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('technical_contents', function (Blueprint $table) {
            $table->id();

            /* ===============================
               CONTENT STRUCTURE
            =============================== */

            // Layout choice (admin selects)
            // default = text right
            // style-two = text left
            $table->enum('layout', ['default', 'style-two'])
                ->default('default');

            // Media
            $table->enum('media_type', ['video', 'audio', 'image', 'none'])
                ->default('video');
            $table->string('media_url')->nullable();

            // Category (FAQ group)
            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->nullOnDelete();

            // ex: security_faq, electrical_faq

            /* ===============================
               TITLES (7 LANG)
            =============================== */
            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            /* ===============================
               CONTENT (7 LANG)
            =============================== */
            $table->text('content_az');
            $table->text('content_en')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_de')->nullable();
            $table->text('content_es')->nullable();
            $table->text('content_fr')->nullable();
            $table->text('content_zh')->nullable();

            /* ===============================
               META
            =============================== */
            $table->date('published_at')->nullable();
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('technical_contents');
    }
};
