<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('installation_steps', function (Blueprint $table) {
            $table->id();

            $table->foreignId('installation_section_id')
                ->constrained('installation_sections')
                ->cascadeOnDelete();

            // STEP NUMBER (71 / 72 / 73)
            $table->unsignedTinyInteger('step_number');

            // ===== STEP TITLE =====
            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            // ===== STEP DESCRIPTION =====
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_zh')->nullable();

            // ICON (timer, gear, calendar və s.)
            $table->string('icon')->nullable();

            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('installation_steps');
    }
};
