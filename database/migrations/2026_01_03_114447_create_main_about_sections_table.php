<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('main_about_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_about_page_id')->constrained()->cascadeOnDelete();

            $table->string('key'); 
            // mission, vision, values, principles, difference, trust, cooperation

            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            $table->longText('content_az')->nullable();
            $table->longText('content_en')->nullable();
            $table->longText('content_ru')->nullable();
            $table->longText('content_de')->nullable();
            $table->longText('content_es')->nullable();
            $table->longText('content_fr')->nullable();
            $table->longText('content_zh')->nullable();

            $table->integer('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main_about_sections');
    }
};
