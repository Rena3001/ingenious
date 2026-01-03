<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('main_about_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_about_page_id')->constrained()->cascadeOnDelete();
            $table->string('image');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main_about_galleries');
    }
};
