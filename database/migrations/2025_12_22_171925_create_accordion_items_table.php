<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accordion_items', function (Blueprint $table) {
            $table->id();

            // Foreign key
            $table->foreignId('accordion_section_id')
                ->constrained('accordion_sections')
                ->cascadeOnDelete();

            // Icon (fa-plus / fa-minus)
            $table->string('icon')->nullable();

            // Title (7 dil)
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            // Content text (7 dil)
            $table->text('content_az')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_de')->nullable();
            $table->text('content_fr')->nullable();
            $table->text('content_es')->nullable();
            $table->text('content_zh')->nullable();

            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accordion_items');
    }
};
