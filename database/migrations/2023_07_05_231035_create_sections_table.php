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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name_section', 30);
            $table->integer('name_type', false);
            $table->string('link_section', 50)->nullable();
            $table->string('title', 50);
            $table->string('subtitle')->nullable();
            $table->string('btn_text', 20)->nullable();
            $table->string('btn_link', 100)->nullable();
            $table->string('img', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
