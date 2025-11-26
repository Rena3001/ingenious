<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {

            // MAIN SECTION — title & description
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();

            $table->text('description_de')->nullable();
            $table->text('description_es')->nullable();


            // ICON REPEATER titles
            $table->string('icon_title_de')->nullable();
            $table->string('icon_title_es')->nullable();


            // SECTION 2 — title & description
            $table->string('section2_title_de')->nullable();
            $table->string('section2_title_es')->nullable();

            $table->text('section2_description_de')->nullable();
            $table->text('section2_description_es')->nullable();




            // SECTION 2 — Button Text
            $table->string('section2_button_text_de')->nullable();
            $table->string('section2_button_text_es')->nullable();


            // SECTION 3 — title & description
            $table->string('section3_title_de')->nullable();
            $table->string('section3_title_es')->nullable();

            $table->text('section3_description_de')->nullable();
            $table->text('section3_description_es')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                // MAIN
                'title_de',
                'title_es',
                'description_de',
                'description_es',

                // ICONS
                'icon_title_de',
                'icon_title_es',

                // SECTION 2
                'section2_title_de',
                'section2_title_es',
                'section2_description_de',
                'section2_description_es',
                'section2_button_text_de',
                'section2_button_text_es',

                // SECTION 3
                'section3_title_de',
                'section3_title_es',
                'section3_description_de',
                'section3_description_es',
            ]);
        });
    }
};
