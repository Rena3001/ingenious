<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('main_about_ceo_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_about_page_id')->constrained()->cascadeOnDelete();

            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            $table->longText('message_az');
            $table->longText('message_en')->nullable();
            $table->longText('message_ru')->nullable();
            $table->longText('message_de')->nullable();
            $table->longText('message_es')->nullable();
            $table->longText('message_fr')->nullable();
            $table->longText('message_zh')->nullable();

            $table->string('signature')->nullable(); // BAMoONE / Founder

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main_about_ceo_messages');
    }
};
