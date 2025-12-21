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
        Schema::create('product_showcases', function (Blueprint $table) {
            $table->id();

            // 21 - Məhsul fotosu
            $table->string('image')->nullable();

            // 21.1 - Məhsul adı (7 dil)
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            // 21.2 - Qısa izah (7 dil)
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_zh')->nullable();

            // 21.3 - İkonlar
            $table->string('icon_1')->nullable();
            $table->string('icon_2')->nullable();
            $table->string('icon_3')->nullable();

            // İkon mətnləri (7 dil)
            $table->string('icon_1_text_az')->nullable();
            $table->string('icon_1_text_en')->nullable();
            $table->string('icon_1_text_ru')->nullable();
            $table->string('icon_1_text_de')->nullable();
            $table->string('icon_1_text_fr')->nullable();
            $table->string('icon_1_text_es')->nullable();
            $table->string('icon_1_text_zh')->nullable();

            $table->string('icon_2_text_az')->nullable();
            $table->string('icon_2_text_en')->nullable();
            $table->string('icon_2_text_ru')->nullable();
            $table->string('icon_2_text_de')->nullable();
            $table->string('icon_2_text_fr')->nullable();
            $table->string('icon_2_text_es')->nullable();
            $table->string('icon_2_text_zh')->nullable();

            $table->string('icon_3_text_az')->nullable();
            $table->string('icon_3_text_en')->nullable();
            $table->string('icon_3_text_ru')->nullable();
            $table->string('icon_3_text_de')->nullable();
            $table->string('icon_3_text_fr')->nullable();
            $table->string('icon_3_text_es')->nullable();
            $table->string('icon_3_text_zh')->nullable();


            $table->string('button_link')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_showcases');
    }
};
