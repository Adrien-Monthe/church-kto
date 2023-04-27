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
        Schema::create('prayers', function (Blueprint $table) {
            $table->id();
            $table->string("codename")->unique()->nullable();
            $table->json("title")->nullable();
            $table->json("sub_title")->nullable();
            $table->json("content")->nullable();
            $table->string("author")->nullable();
            $table->json("short_description")->nullable();
            $table->text("image_path")->nullable();
            $table->string("meta_keywords")->nullable();
            $table->integer("views")->nullable()->default(0);
            $table->timestamp("deleted_at")->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prayers');
    }
};
