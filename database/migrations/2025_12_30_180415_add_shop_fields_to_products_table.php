<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {

        

            /* =====================
               IDENTIFICATION
            ===================== */
            $table->string('model_code')->unique()->after('id');
            $table->string('slug')->unique()->after('model_code');

            /* =====================
               STATUS / BADGES
            ===================== */
            $table->boolean('is_new')->default(false)->after('slug');
            $table->boolean('is_top_seller')->default(false)->after('is_new');
            $table->boolean('is_active')->default(true)->after('is_top_seller');

            /* =====================
               AMAZON / PRICE
            ===================== */
            $table->decimal('amazon_price', 10, 2)->nullable()->after('price');
            $table->string('currency', 5)->default('USD')->after('amazon_price');

            /* =====================
               SHOP FEATURES (TAGS)
            ===================== */
            $table->json('features')->nullable()->after('amazon_link');

            /* =====================
               LINKS
            ===================== */
            $table->string('detail_page_url')->nullable()->after('amazon_link');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'name_fr',
                'name_zh',
                'description_fr',
                'description_zh',
                'model_code',
                'slug',
                'is_new',
                'is_top_seller',
                'is_active',
                'amazon_price',
                'currency',
                'features',
                'detail_page_url',
            ]);
        });
    }
};
