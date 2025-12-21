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
        Schema::create('product_highlight_features', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_highlight_id')
                ->constrained()
                ->cascadeOnDelete();

            // Flaticon class
            $table->string('icon')->nullable();
            // məsələn: flaticon-fingerprint, flaticon-keypad, flaticon-bluetooth

            // Başlıq
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            // Fayda mətni
            $table->text('content_az')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_de')->nullable();
            $table->text('content_fr')->nullable();
            $table->text('content_es')->nullable();
            $table->text('content_zh')->nullable();

            $table->integer('order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_highlight_features');
    }
};
