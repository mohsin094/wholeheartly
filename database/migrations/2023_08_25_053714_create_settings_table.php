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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('thanks_header')->nullable();
            $table->json('tabs_txt')->nullable();
            $table->json('first_tab')->nullable();
            $table->json('four_star_page')->nullable();
            $table->json('five_star_page')->nullable();
            $table->json('review')->nullable();
            $table->json('thanks_page')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
