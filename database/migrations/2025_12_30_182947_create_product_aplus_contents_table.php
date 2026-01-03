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
        Schema::create('product_aplus_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('image');
            $table->text('text_az')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_ru')->nullable();
            $table->text('text_de')->nullable();
            $table->text('text_es')->nullable();
            $table->text('text_fr')->nullable();
            $table->text('text_zh')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_aplus_contents');
    }
};
