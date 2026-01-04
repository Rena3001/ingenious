<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('teams', function (Blueprint $table) {

            // 🇫🇷 French
            $table->string('name_fr')->nullable()->after('name_es');
            $table->string('position_fr')->nullable()->after('position_es');
            $table->text('desc_fr')->nullable()->after('desc_es');

            // 🇨🇳 Chinese
            $table->string('name_zh')->nullable()->after('name_fr');
            $table->string('position_zh')->nullable()->after('position_fr');
            $table->text('desc_zh')->nullable()->after('desc_fr');
        });
    }

    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn([
                'name_fr',
                'position_fr',
                'desc_fr',
                'name_zh',
                'position_zh',
                'desc_zh',
            ]);
        });
    }
};
