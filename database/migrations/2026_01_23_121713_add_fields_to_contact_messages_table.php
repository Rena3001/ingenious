<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contact_messages', function (Blueprint $table) {


            $table->string('entity_type')->nullable();
            // example: Company / Individual / Legal Entity

            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_messages', function (Blueprint $table) {
            $table->string('entity_type')->nullable();
            // example: Company / Individual / Legal Entity

            $table->string('phone')->nullable();
        });
    }
};
