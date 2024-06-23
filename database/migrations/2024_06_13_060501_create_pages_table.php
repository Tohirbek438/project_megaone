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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('title_uz');
            $table->string('title_ru')->nullable();
            $table->string('title_eng')->nullable();
            $table->text('description_uz');
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->integer('menu_category');
            $table->string('date');
            $table->string('tags');
            $table->integer('status')->default(1);
            $table->integer('image_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
