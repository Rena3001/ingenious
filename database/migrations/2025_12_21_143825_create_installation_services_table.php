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
        Schema::create('installation_services', function (Blueprint $table) {
    $table->id();

    // 20 — Arxa fon şəkli
    $table->string('background_image')->nullable();

    // 20.1 — Başlıq
    $table->string('title_az')->nullable();
    $table->string('title_en')->nullable();
    $table->string('title_ru')->nullable();
    $table->string('title_de')->nullable();
    $table->string('title_fr')->nullable();
    $table->string('title_es')->nullable();
    $table->string('title_zh')->nullable();

    // 20.2 — Açıqlama
    $table->text('description_az')->nullable();
    $table->text('description_en')->nullable();
    $table->text('description_ru')->nullable();
    $table->text('description_de')->nullable();
    $table->text('description_fr')->nullable();
    $table->text('description_es')->nullable();
    $table->text('description_zh')->nullable();

    // 20.4 — Button
    $table->string('cta_link')->nullable();

    $table->boolean('is_active')->default(true);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installation_services');
    }
};
