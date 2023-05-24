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
        Schema::create('potags', function (Blueprint $table) {
            $table->id();
            $table->string("codename")->unique()->nullable();
            $table->json("name")->nullable();
            $table->string("meta_description")->nullable();
            $table->string("meta_keywords")->nullable();
            $table->text("meta_image_path")->nullable();
            $table->json("short_description")->nullable();
            $table->json("description")->nullable();
            $table->text("image_path")->nullable();
            $table->timestamp("deleted_at")->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potags');
    }
};
