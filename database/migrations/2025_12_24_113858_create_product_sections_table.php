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
        Schema::create('product_sections', function (Blueprint $table) {
            $table->id();

            $table->string('background_image')->nullable();

            foreach (['az', 'en', 'ru', 'de', 'fr', 'es', 'zh'] as $lang) {
                $table->string("title_$lang")->nullable();
                $table->text("description_$lang")->nullable();
            }

            for ($i = 1; $i <= 4; $i++) {
                $table->string("product_{$i}_image")->nullable();
                foreach (['az', 'en', 'ru', 'de', 'fr', 'es', 'zh'] as $lang) {
                    $table->string("product_{$i}_title_$lang")->nullable();
                    $table->text("product_{$i}_desc_$lang")->nullable();
                }
            }

            $table->string('button_url')->nullable();
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sections');
    }
};
