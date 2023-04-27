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
        Schema::create('bcomments', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("comment")->nullable();
            $table->foreignId("blog_id")->nullable();
            $table->timestamp("deleted_at")->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bcomments');
    }
};
