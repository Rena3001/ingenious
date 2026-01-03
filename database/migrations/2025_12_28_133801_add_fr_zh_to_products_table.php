<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Title
            $table->string('name_fr')->nullable()->after('name_es');
            $table->string('name_zh')->nullable()->after('name_fr');

            // Description
            $table->text('description_fr')->nullable()->after('description_es');
            $table->text('description_zh')->nullable()->after('description_fr');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'name_fr',
                'name_zh',
                'description_fr',
                'description_zh'
            ]);
        });
    }
};
