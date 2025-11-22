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
            Schema::create('categories', function (Blueprint $table) {
                $table->id();
                // !!! burada name_az falan olacaq
                $table->string('name_az');
                $table->string('name_en')->nullable();
                $table->string('name_ru')->nullable();
                $table->timestamps();
            });

        }

        public function down()
        {
            Schema::table('categories', function ($table) {
                
            });
        }

};
