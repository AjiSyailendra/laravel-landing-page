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
        Schema::create('footer_sub_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('footer_menu_id');
            $table->integer('type_sub_menu');
            $table->string('text_sub_menu', 50);
            $table->string('link_sub_menu', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_sub_menus');
    }
};
