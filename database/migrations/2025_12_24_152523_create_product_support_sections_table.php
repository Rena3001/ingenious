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
        Schema::create('product_support_sections', function (Blueprint $table) {
            $table->id();

            $table->string('background_image')->nullable();
            $table->string('image')->nullable();

            foreach (['az', 'en', 'ru', 'de', 'fr', 'es', 'zh'] as $lang) {
                $table->string("title_$lang")->nullable();
                $table->text("description_$lang")->nullable();
            }

            $table->string('icon_1')->nullable();
            $table->string('icon_1_url')->nullable();
            $table->string('icon_2')->nullable();
            $table->string('icon_2_url')->nullable();
            $table->string('icon_3')->nullable();
            $table->string('icon_3_url')->nullable();

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
        Schema::dropIfExists('product_support_sections');
    }
};
