<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sliders', function (Blueprint $table) {

            // 🇫🇷 French
            $table->string('title_fr')->nullable()->after('title_es');
            $table->text('description_fr')->nullable()->after('description_es');

            // 🇨🇳 Chinese
            $table->string('title_zh')->nullable()->after('title_fr');
            $table->text('description_zh')->nullable()->after('description_fr');
        });
    }

    public function down(): void
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->dropColumn([
                'title_fr',
                'description_fr',
                'title_zh',
                'description_zh',
            ]);
        });
    }
};
