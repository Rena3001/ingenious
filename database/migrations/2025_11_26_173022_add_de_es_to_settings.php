<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {

            // Titles
            $table->string('contact_title_de')->nullable();
            $table->string('contact_title_es')->nullable();

            // Descriptions
            $table->text('contact_desc_de')->nullable();
            $table->text('contact_desc_es')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn([
                'contact_title_de',
                'contact_title_es',
                'contact_desc_de',
                'contact_desc_es',
            ]);
        });
    }
};
