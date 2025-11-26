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
        Schema::table('processes', function (Blueprint $table) {
            $table->string('title_de')->nullable();
            $table->string('title_es')->nullable();

            $table->text('description_de')->nullable();
            $table->text('description_es')->nullable();
        });
    }

    public function down()
    {
        Schema::table('processes', function (Blueprint $table) {
            $table->dropColumn([
                'title_de',
                'title_es',
                'description_de',
                'description_es',
            ]);
        });
    }
};
