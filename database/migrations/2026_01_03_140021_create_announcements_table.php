<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();

            /* =====================================
             | Slug (URL üçün)
             ===================================== */
            $table->string('slug')->unique();

            /* =====================================
             | Type (filter üçün)
             | overview | announcement | campaign
             ===================================== */
            $table->enum('type', ['overview', 'announcement', 'campaign'])
                ->default('announcement');

            /* =====================================
             | Title (7 dil)
             ===================================== */
            $table->string('title_az');
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('title_de');
            $table->string('title_fr');
            $table->string('title_es');
            $table->string('title_zh');

            /* =====================================
             | Short description (sağ tərəf intro)
             ===================================== */
            $table->text('intro_az')->nullable();
            $table->text('intro_en')->nullable();
            $table->text('intro_ru')->nullable();
            $table->text('intro_de')->nullable();
            $table->text('intro_fr')->nullable();
            $table->text('intro_es')->nullable();
            $table->text('intro_zh')->nullable();

            /* =====================================
             | Full content (tam izah)
             ===================================== */
            $table->longText('content_az')->nullable();
            $table->longText('content_en')->nullable();
            $table->longText('content_ru')->nullable();
            $table->longText('content_de')->nullable();
            $table->longText('content_fr')->nullable();
            $table->longText('content_es')->nullable();
            $table->longText('content_zh')->nullable();

            /* =====================================
             | Images (sol tərəf slider / gallery)
             ===================================== */
            $table->string('main_image')->nullable();
            $table->json('gallery')->nullable();

            /* =====================================
             | Campaign specific
             ===================================== */
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            /* =====================================
             | Status
             ===================================== */
            $table->boolean('is_active')->default(true);

            /* =====================================
             | Sorting & publish
             ===================================== */
            $table->integer('sort_order')->default(0);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
