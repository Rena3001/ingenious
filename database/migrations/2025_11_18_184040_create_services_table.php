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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            /**
             * Sonsuz sayda icon əlavə etmək üçün — JSON saxlanacaq.
             * icons = [
             *     [
             *         'icon' => 'flaticon-lamp-1',
             *         'icon_title_az' => 'Aydınlatma',
             *         'icon_title_en' => 'Lighting',
             *         'icon_title_ru' => 'Освещение',
             *     ],
             *     ...
             * ]
             */
            $table->json('icons')->nullable();

            // 3 dil üçün başlıq
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();

            // 3 dil üçün description
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();

            // Sortlama üçün
            $table->integer('sort')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
