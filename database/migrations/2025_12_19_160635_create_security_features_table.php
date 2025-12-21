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
        Schema::create('security_features', function (Blueprint $table) {
            $table->id();

            // Icon (svg name / icon key)
            $table->string('icon');

            // Titles (7 dil)
            $table->string('title_az');
            $table->string('title_en')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_zh')->nullable();

            // Descriptions (1 cümlə, 7 dil)
            $table->text('description_az');
            $table->text('description_en')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_zh')->nullable();

            // Status & order
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('security_features');
    }
};
