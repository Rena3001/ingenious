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
        Schema::create('technical_icons', function (Blueprint $table) {
            $table->id();
            $table->string('icon_1')->nullable();
            $table->string('icon_2')->nullable();
            $table->string('icon_3')->nullable();
            $table->string('icon_4')->nullable();
            $table->string('icon_1_az')->nullable();
            $table->string('icon_1_en')->nullable();
            $table->string('icon_1_ru')->nullable();
            $table->string('icon_1_de')->nullable();
            $table->string('icon_1_es')->nullable();
            $table->string('icon_1_fr')->nullable();
            $table->string('icon_1_zh')->nullable();
            $table->string('icon_2_az')->nullable();
            $table->string('icon_2_en')->nullable();
            $table->string('icon_2_ru')->nullable();
            $table->string('icon_2_de')->nullable();
            $table->string('icon_2_es')->nullable();
            $table->string('icon_2_fr')->nullable();
            $table->string('icon_2_zh')->nullable();
            $table->string('icon_3_az')->nullable();
            $table->string('icon_3_en')->nullable();
            $table->string('icon_3_ru')->nullable();
            $table->string('icon_3_de')->nullable();
            $table->string('icon_3_es')->nullable();
            $table->string('icon_3_fr')->nullable();
            $table->string('icon_3_zh')->nullable();
            $table->string('icon_4_az')->nullable();
            $table->string('icon_4_en')->nullable();
            $table->string('icon_4_ru')->nullable();
            $table->string('icon_4_de')->nullable();
            $table->string('icon_4_es')->nullable();
            $table->string('icon_4_fr')->nullable();
            $table->string('icon_4_zh')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_icons');
    }
};
