<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            // 3 dillik title
            $table->string('title_az');
            $table->string('title_en');
            $table->string('title_ru');

            // 3 dillik description
            $table->text('description_az');
            $table->text('description_en');
            $table->text('description_ru');

            // image
            $table->string('image')->nullable();

            // position: left / right
            $table->enum('position', ['left', 'right'])->default('left');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
