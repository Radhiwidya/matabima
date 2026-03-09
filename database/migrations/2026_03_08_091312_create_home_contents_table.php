<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_contents', function (Blueprint $table) {
            $table->id();
            $table->string('hero_video')->nullable();
            $table->string('we_are_image')->nullable();
            $table->text('we_are_caption')->nullable();
            $table->string('etocia_image')->nullable();
            $table->string('contact_image')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_link')->nullable();
            $table->string('banner_client_image')->nullable();
            $table->text('product_caption')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_contents');
    }
};