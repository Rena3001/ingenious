<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {

            // TYPE
            if (!Schema::hasColumn('about_sections', 'type')) {
                $table->string('type')->nullable();
            }

            // TITLES
            foreach (['az','en','ru','de','es'] as $lang) {
                if (!Schema::hasColumn('about_sections', 'title_'.$lang)) {
                    $table->string('title_'.$lang)->nullable();
                }
            }

            // CONTENT
            foreach (['az','en','ru','de','es'] as $lang) {
                if (!Schema::hasColumn('about_sections', 'content_'.$lang)) {
                    $table->longText('content_'.$lang)->nullable();
                }
            }

            // SHORT DESC
            foreach (['az','en','ru','de','es'] as $lang) {
                if (!Schema::hasColumn('about_sections', 'short_desc_'.$lang)) {
                    $table->text('short_desc_'.$lang)->nullable();
                }
            }

    
            // BUTTON KEY
            if (!Schema::hasColumn('about_sections', 'button_key')) {
                $table->string('button_key')->nullable();
            }

            // ACTIVE STATUS
            if (!Schema::hasColumn('about_sections', 'is_active')) {
                $table->boolean('is_active')->default(true);
            }
        });
    }

    public function down(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {

            $columns = [
                'type',
                'button_key',
                'is_active'
            ];

            foreach (['az','en','ru','de','es'] as $lang) {
                $columns[] = 'title_'.$lang;
                $columns[] = 'content_'.$lang;
                $columns[] = 'short_desc_'.$lang;
            }

            foreach ($columns as $col) {
                if (Schema::hasColumn('about_sections', $col)) {
                    $table->dropColumn($col);
                }
            }
        });
    }
};
