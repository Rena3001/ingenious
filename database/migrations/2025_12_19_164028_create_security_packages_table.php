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
        Schema::create('security_packages', function (Blueprint $table) {
            $table->id();

            // əlaqə
            $table->foreignId('product_id')
                ->constrained('products')
                ->cascadeOnDelete();

            // Başlıq (8)
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_zh')->nullable();

            // Açıqlama (8.1)
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_zh')->nullable();

            // Texniki başlıq (9)
            $table->string('features_title_az')->default('Təhlükəsizlik Paketi');
            $table->string('features_title_en')->default('Security Package');

            // Arxa fon (11)
            $table->string('background_image')->nullable();

            // Model şəkli (telefonlu əl)
            $table->string('model_image')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('security_packages');
    }
};
