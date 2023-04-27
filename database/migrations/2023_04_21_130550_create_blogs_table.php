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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("codename")->unique()->nullable();
            $table->string("type")->nullable();
            $table->boolean("status")->default(false);
            $table->string('youtube_code')->nullable();
            $table->string('read_time')->nullable();
            $table->boolean("comment_status")->default(false);
            $table->string("visibility")->default("public")->nullable();
            $table->string("language")->default("fr")->nullable();
            $table->json("title")->nullable();
            $table->string("author")->nullable();
            $table->string("meta_description")->nullable();
            $table->string("meta_keywords")->nullable();
            $table->text("meta_image_path")->nullable();
            $table->json("short_description")->nullable();
            $table->json("description")->nullable();
            $table->text("image_path")->nullable();
            $table->integer("views")->nullable()->default(0);
            $table->foreignId("bcatergory_id")->nullable();
            $table->timestamp("deleted_at")->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
