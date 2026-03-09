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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('logo')->nullable();
            $table->string('white_logo')->nullable();
            $table->string('general_banner')->nullable();
            $table->string('article_banner')->nullable();
            $table->string('future_banner')->nullable();
            // Featured Content
            $table->string('our_service')->nullable();
            $table->string('our_clients')->nullable();
            $table->string('our_product')->nullable();
            // Social Media
            $table->bigInteger('wa')->nullable();
            $table->string('phone')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('tiktok')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('facebook')->nullable();
            $table->text('footer_address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};