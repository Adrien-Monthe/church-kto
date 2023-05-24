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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string("codename")->unique()->nullable();
            $table->string("slug")->unique();
            $table->json("name")->nullable();
            $table->json("short_description")->nullable();
            $table->json("description")->nullable();
            $table->integer("views")->nullable();
            $table->string("visibility")->default("public")->nullable();
            $table->text("image_path_banner")->nullable();
            $table->text("image_path")->nullable();
            $table->foreignId("added_by")->nullable();
            $table->foreignId("pocategory_id")->nullable();
            $table->date('event_date')->nullable();
            $table->timestamp("deleted_at")->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
