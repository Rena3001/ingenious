<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('home_abouts', function (Blueprint $table) {

            // TITLES
            $table->string('title_fr')->nullable()->after('title_es');
            $table->string('title_zh')->nullable()->after('title_fr');

            // DESCRIPTIONS
            $table->longText('desc_fr')->nullable()->after('desc_es');
            $table->longText('desc_zh')->nullable()->after('desc_fr');
        });
    }

    public function down(): void
    {
        Schema::table('home_abouts', function (Blueprint $table) {
            $table->dropColumn([
                'title_fr',
                'title_zh',
                'desc_fr',
                'desc_zh',
            ]);
        });
    }
};
