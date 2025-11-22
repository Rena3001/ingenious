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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('map_iframe')->nullable();

            $table->string('contact_title_az')->nullable();
            $table->string('contact_title_en')->nullable();
            $table->string('contact_title_ru')->nullable();

            $table->text('contact_desc_az')->nullable();
            $table->text('contact_desc_en')->nullable();
            $table->text('contact_desc_ru')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
