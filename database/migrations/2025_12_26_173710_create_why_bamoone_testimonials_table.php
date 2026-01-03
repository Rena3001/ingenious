<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('why_bamoone_testimonials', function (Blueprint $table) {
            $table->id();

            // Title
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_zh')->nullable();

            // Logo / Image
            $table->string('image_logo')->nullable();

            // Description
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_zh')->nullable();

            // Slider control
            $table->integer('sort_order')->default(1);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('why_bamoone_testimonials');
    }
};
