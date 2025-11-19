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
            if (!Schema::hasColumn('about_sections', 'background_image')) {
                $table->string('background_image')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('about_sections', function (Blueprint $table) {
            $table->dropColumn('background_image');
        });
    }

};
