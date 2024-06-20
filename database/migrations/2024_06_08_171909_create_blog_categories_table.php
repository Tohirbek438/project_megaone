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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('slug')->nullable();
            $table->text('description_uz');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('blog_categories');
    }
};
