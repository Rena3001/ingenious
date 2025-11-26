<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Names
            $table->string('name_de')->nullable();
            $table->string('name_es')->nullable();

            // Descriptions
            $table->text('description_de')->nullable();
            $table->text('description_es')->nullable();
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'name_de',
                'name_es',
                'description_de',
                'description_es'
            ]);
        });
    }
};
