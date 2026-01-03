<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_video_sections', function (Blueprint $table) {
            $table->id();

            /* =====================
               SECTION TITLE – 24
            ====================== */
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_zh')->nullable();

            /* =====================
               SECTION DESCRIPTION – 24.1
            ====================== */
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_zh')->nullable();

            /* =====================
               FILTER LABELS – 24.2 → 27.1
            ====================== */
            $table->string('filter_all_label')->default('All Products');
            $table->string('filter_security_label')->default('Security Products');
            $table->string('filter_home_label')->default('Home Appliances Products');
            $table->string('filter_electrical_label')->default('Electrical Equipment Products');
            $table->string('filter_electronics_label')->default('Consumer Electronics Products');

            /* =====================
               STATUS
            ====================== */
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_video_sections');
    }
};
