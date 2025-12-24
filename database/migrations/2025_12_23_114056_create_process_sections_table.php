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
        Schema::create('process_sections', function (Blueprint $table) {
            $table->id();

            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_zh')->nullable();

            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_zh')->nullable();


            $table->string('background_image')->nullable();
            $table->string('icon_1')->nullable();
            $table->string('icon_2')->nullable();
            $table->string('icon_3')->nullable();

            $table->string('step_1_desc_az')->nullable();
            $table->string('step_1_desc_en')->nullable();
            $table->string('step_1_desc_ru')->nullable();
            $table->string('step_1_desc_de')->nullable();
            $table->string('step_1_desc_fr')->nullable();
            $table->string('step_1_desc_es')->nullable();
            $table->string('step_1_desc_zh')->nullable();

            $table->string('step_2_desc_az')->nullable();
            $table->string('step_2_desc_en')->nullable();
            $table->string('step_2_desc_ru')->nullable();
            $table->string('step_2_desc_de')->nullable();
            $table->string('step_2_desc_fr')->nullable();
            $table->string('step_2_desc_es')->nullable();
            $table->string('step_2_desc_zh')->nullable();

            $table->string('step_3_desc_az')->nullable();
            $table->string('step_3_desc_en')->nullable();
            $table->string('step_3_desc_ru')->nullable();
            $table->string('step_3_desc_de')->nullable();
            $table->string('step_3_desc_fr')->nullable();
            $table->string('step_3_desc_es')->nullable();
            $table->string('step_3_desc_zh')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process_sections');
    }
};
