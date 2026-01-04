<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {
            // 🇫🇷 French
            $table->string('title_fr')->nullable()->after('title_es');
            $table->text('content_fr')->nullable()->after('content_es');
            $table->text('short_desc_fr')->nullable()->after('short_desc_es');

            // 🇨🇳 Chinese
            $table->string('title_zh')->nullable()->after('title_fr');
            $table->text('content_zh')->nullable()->after('content_fr');
            $table->text('short_desc_zh')->nullable()->after('short_desc_fr');
        });
    }

    public function down(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {
            $table->dropColumn([
                'title_fr',
                'content_fr',
                'short_desc_fr',
                'title_zh',
                'content_zh',
                'short_desc_zh',
            ]);
        });
    }
};
