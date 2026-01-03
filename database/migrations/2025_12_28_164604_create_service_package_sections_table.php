<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_package_sections', function (Blueprint $table) {
            $table->id();

            // TITLE — 76
            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            // SUBTITLE — 76.1
            $table->text('subtitle_az')->nullable();
            $table->text('subtitle_en')->nullable();
            $table->text('subtitle_ru')->nullable();
            $table->text('subtitle_de')->nullable();
            $table->text('subtitle_es')->nullable();
            $table->text('subtitle_fr')->nullable();
            $table->text('subtitle_zh')->nullable();

            // NOTE MAIN — 76.2 / 76.3
            $table->text('note_az')->nullable();
            $table->text('note_en')->nullable();
            $table->text('note_ru')->nullable();
            $table->text('note_de')->nullable();
            $table->text('note_es')->nullable();
            $table->text('note_fr')->nullable();
            $table->text('note_zh')->nullable();

            // NOTE REMOTE — 76.5
            $table->text('remote_note_az')->nullable();
            $table->text('remote_note_en')->nullable();
            $table->text('remote_note_ru')->nullable();
            $table->text('remote_note_de')->nullable();
            $table->text('remote_note_es')->nullable();
            $table->text('remote_note_fr')->nullable();
            $table->text('remote_note_zh')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_package_sections');
    }
};
