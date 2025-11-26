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
        Schema::table('about_sections', function (Blueprint $table) {
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();

            $table->text('content_de')->nullable();
            $table->text('content_es')->nullable();

            $table->text('short_desc_de')->nullable();
            $table->text('short_desc_es')->nullable();
        });
    }

    public function down()
    {
        Schema::table('about_sections', function (Blueprint $table) {
            $table->dropColumn([
                'title_de',
                'title_es',
                'content_de',
                'content_es',
                'short_desc_de',
                'short_desc_es',
            ]);
        });
    }
};
