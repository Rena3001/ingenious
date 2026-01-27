<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {

            // titles
            $table->string('contact_title_fr')->nullable()->after('contact_title_es');
            $table->string('contact_title_zh')->nullable()->after('contact_title_fr');

            // desc
            $table->text('contact_desc_fr')->nullable()->after('contact_desc_es');
            $table->text('contact_desc_zh')->nullable()->after('contact_desc_fr');
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn([
                'contact_title_fr',
                'contact_title_zh',
                'contact_desc_fr',
                'contact_desc_zh',
            ]);
        });
    }
};
