<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();

            // Başlıqlar (3 dil)
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();

            // Açıqlamalar (3 dil)
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();

            // Düymə üçün tərcümə açarı (Translation modelə bağlı)
            $table->string('button_key')->nullable()->comment('Translation açarı, məsələn: buttons.read_more');

            // Link (ümumi)
            $table->string('button_url')->nullable();

            // Şəkil
            $table->string('image')->nullable();

            // Sıra və status
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
