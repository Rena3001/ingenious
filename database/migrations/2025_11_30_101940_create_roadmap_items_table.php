<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('roadmap_items', function (Blueprint $table) {
            $table->id();

            // Stage number (1,2,3,4)
            $table->unsignedTinyInteger('stage_number')->default(1);

            // Icon (svg or icon class)
            $table->longText('icon')->nullable();

            // Image
            $table->string('image')->nullable();

            // Titles
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();

            // Subtitles
            $table->string('subtitle_az')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->string('subtitle_ru')->nullable();
            $table->string('subtitle_de')->nullable();
            $table->string('subtitle_es')->nullable();

            // Descriptions
            $table->longText('desc_az')->nullable();
            $table->longText('desc_en')->nullable();
            $table->longText('desc_ru')->nullable();
            $table->longText('desc_de')->nullable();
            $table->longText('desc_es')->nullable();

            // Button link (URL)
            $table->string('button_link')->nullable();

            // Button key — if translation used
            $table->string('button_key')->nullable();

            // Active status
            $table->boolean('is_active')->default(true);

            // Order
            $table->integer('order')->default(1);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roadmap_items');
    }
};
