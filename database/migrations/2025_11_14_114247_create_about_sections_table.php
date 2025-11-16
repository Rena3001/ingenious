<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();

            // Section növü (about, standard, mission)
            $table->string('type')->comment('about_section_three | our_standards | our_mission');

            // Başlıqlar (3 dil)
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();

            // Kontent (rich text - editor üçün)
            $table->longText('content_az')->nullable();
            $table->longText('content_en')->nullable();
            $table->longText('content_ru')->nullable();

            // Qısa təsvir (mission üçün)
            $table->text('short_desc_az')->nullable();
            $table->text('short_desc_en')->nullable();
            $table->text('short_desc_ru')->nullable();

            // Düymə tərcümə açarı (yalnız About Section üçün)
            $table->string('button_key')->nullable()->comment('Translation açarı, məsələn: buttons.join_team');

            // Aktiv / deaktiv
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });

        // Mission ikonları ayrıca cədvəldə saxlanacaq
        Schema::create('about_mission_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('about_section_id')->constrained('about_sections')->onDelete('cascade');
            $table->string('icon')->nullable(); // flaticon icon adı
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('text_az')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_ru')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_mission_items');
        Schema::dropIfExists('about_sections');
    }
};
