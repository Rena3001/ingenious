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
        Schema::create('steps', function (Blueprint $table) {
            $table->id();

            // Title
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();

            // Description
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();

            // Button text + link
            $table->string('button_text_az')->nullable();
            $table->string('button_text_en')->nullable();
            $table->string('button_text_ru')->nullable();
            $table->string('button_link')->nullable();

            // Image
            $table->string('image')->nullable();

            // Layout seçimi
            $table->enum('layout', ['left-image', 'right-image'])->default('right-image');

            // Step number
            $table->integer('step_number')->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('steps');
    }

};
