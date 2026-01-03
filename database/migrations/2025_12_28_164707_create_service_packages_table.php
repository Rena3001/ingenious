<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_packages', function (Blueprint $table) {
            $table->id();

            $table->foreignId('service_package_section_id')
                ->constrained()
                ->cascadeOnDelete();

            // BASIC / PRIORITY / PREMIUM
            $table->string('package_key'); // basic | priority | premium
            $table->integer('price')->nullable(); // 39 / 99 / 79
            $table->string('price_unit')->default('hr'); // hr

            // TITLE — 77 / 78 / 79
            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            // DESCRIPTION MAIN — 77.1 / 78.1 / 79.1
            $table->text('description_main_az')->nullable();
            $table->text('description_main_en')->nullable();
            $table->text('description_main_ru')->nullable();
            $table->text('description_main_de')->nullable();
            $table->text('description_main_es')->nullable();
            $table->text('description_main_fr')->nullable();
            $table->text('description_main_zh')->nullable();

            // DESCRIPTION DETAIL — 77.2 / 78.2 / 79.2
            $table->text('description_detail_az')->nullable();
            $table->text('description_detail_en')->nullable();
            $table->text('description_detail_ru')->nullable();
            $table->text('description_detail_de')->nullable();
            $table->text('description_detail_es')->nullable();
            $table->text('description_detail_fr')->nullable();
            $table->text('description_detail_zh')->nullable();

            // REMOTE NOTE — 77.3 / 78.3 / 79.3
            $table->text('remote_note_az')->nullable();
            $table->text('remote_note_en')->nullable();
            $table->text('remote_note_ru')->nullable();
            $table->text('remote_note_de')->nullable();
            $table->text('remote_note_es')->nullable();
            $table->text('remote_note_fr')->nullable();
            $table->text('remote_note_zh')->nullable();

            // UI
            $table->string('icon')->nullable();
            $table->boolean('is_featured')->default(false); // middle card
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_packages');
    }
};
