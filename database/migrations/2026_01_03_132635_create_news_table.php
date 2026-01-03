<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            /* =====================================
             | Slug (for detail page)
             ===================================== */
            $table->string('slug')->unique();

            /* =====================================
             | Category (filter + logic)
             | news | press | events
             ===================================== */
            $table->enum('category', ['news', 'press', 'events']);

            /* =====================================
             | Title (7 languages)
             ===================================== */
            $table->string('title_az');
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('title_de');
            $table->string('title_fr');
            $table->string('title_es');
            $table->string('title_zh');

            /* =====================================
             | Short description / preview (7 languages)
             ===================================== */
            $table->text('short_description_az')->nullable();
            $table->text('short_description_en')->nullable();
            $table->text('short_description_ru')->nullable();
            $table->text('short_description_de')->nullable();
            $table->text('short_description_fr')->nullable();
            $table->text('short_description_es')->nullable();
            $table->text('short_description_zh')->nullable();

            /* =====================================
             | Full content (7 languages)
             ===================================== */
            $table->longText('content_az')->nullable();
            $table->longText('content_en')->nullable();
            $table->longText('content_ru')->nullable();
            $table->longText('content_de')->nullable();
            $table->longText('content_fr')->nullable();
            $table->longText('content_es')->nullable();
            $table->longText('content_zh')->nullable();

            /* =====================================
             | Media
             ===================================== */
            $table->string('main_image')->nullable();   // grid + banner
            $table->json('gallery')->nullable();        // event photos
            $table->string('video_url')->nullable();    // optional

            /* =====================================
             | Event specific
             ===================================== */
            $table->date('event_date')->nullable();
            $table->string('event_location')->nullable();

            /* =====================================
             | Flags
             ===================================== */
            $table->boolean('is_featured')->default(false); // slider
            $table->boolean('is_active')->default(true);

            /* =====================================
             | Publish date
             ===================================== */
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
