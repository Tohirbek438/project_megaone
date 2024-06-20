<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('email_uz');
            $table->string('email_ru')->nullable();
            $table->string('email_en')->nullable();
            $table->string('message_uz');
            $table->string('message_ru')->nullable();
            $table->string('message_en')->nullable();
            $table->string('date_uz');
            $table->string('date_ru')->nullable();
            $table->string('date_en')->nullable();
            $table->integer('menu_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_forms');
    }
};
