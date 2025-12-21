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
        Schema::create('security_package_features', function (Blueprint $table) {
    $table->id();
    $table->foreignId('security_package_id')
        ->constrained()
        ->cascadeOnDelete();

    $table->string('text_az');
    $table->string('text_en');
    $table->string('text_es')->nullable();
    $table->string('text_de')->nullable();
    $table->string('text_fr')->nullable();
    $table->string('text_ru')->nullable();
    $table->string('text_zh')->nullable();

    $table->integer('order')->default(0);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('security_package_features');
    }
};
