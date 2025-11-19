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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            // Names
            $table->string('name_az');
            $table->string('name_en')->nullable();
            $table->string('name_ru')->nullable();

            // Positions
            $table->string('position_az')->nullable();
            $table->string('position_en')->nullable();
            $table->string('position_ru')->nullable();

            // Descriptions — optional
            $table->text('desc_az')->nullable();
            $table->text('desc_en')->nullable();
            $table->text('desc_ru')->nullable();

            // Image
            $table->string('image')->nullable();

            // Social links
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();

            // Sorting
            $table->integer('sort')->default(0);

            // Active status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
