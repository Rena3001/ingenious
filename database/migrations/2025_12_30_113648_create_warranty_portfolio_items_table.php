<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('warranty_portfolio_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('portfolio_section_id')
                ->constrained('warranty_portfolio_sections')
                ->cascadeOnDelete();

            // Image (28)
            $table->string('image')->nullable();

            // Title
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            // Short description (28.2)
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_zh')->nullable();

            // Product link (28.3)
            $table->string('link')->nullable();

            // Sorting (dot slider order)
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warranty_portfolio_items');
    }
};
