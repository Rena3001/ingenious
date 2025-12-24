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
        Schema::create('call_to_action_twos', function (Blueprint $table) {
            $table->id();
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_zh')->nullable();

            $table->string('subtitle_az')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->string('subtitle_de')->nullable();
            $table->string('subtitle_es')->nullable();
            $table->string('subtitle_fr')->nullable();
            $table->string('subtitle_ru')->nullable();
            $table->string('subtitle_zh')->nullable();

            $table->string('background_image')->nullable();
            $table->string('button_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_to_action_twos');
    }
};
