<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('translations', function (Blueprint $table) {
            // 🇫🇷 French
            $table->string('value_fr')->nullable()->after('value_es');

            // 🇨🇳 Chinese
            $table->string('value_zh')->nullable()->after('value_fr');
        });
    }

    public function down(): void
    {
        Schema::table('translations', function (Blueprint $table) {
            $table->dropColumn([
                'value_fr',
                'value_zh',
            ]);
        });
    }
};
