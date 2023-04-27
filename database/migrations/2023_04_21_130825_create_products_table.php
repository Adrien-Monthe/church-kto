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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text("image_path")->nullable();
            $table->string("reference")->unique();
            $table->string("product_type")->nullable();
            $table->boolean("status")->default(false);
            $table->boolean("comment_status")->default(false);
            $table->string("visibility")->default("public")->nullable();
            $table->json("name")->nullable();
            $table->json("short_description")->nullable();
            $table->json("description")->nullable();
            $table->string("price")->nullable();
            $table->string("promo_price")->nullable();
            $table->integer("quantity_in_stock")->nullable();
            $table->string("meta_description")->nullable();
            $table->string("meta_keywords")->nullable();
            $table->text("meta_image_path")->nullable();
            $table->foreignId("pcategory_id")->nullable();
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
        Schema::dropIfExists('products');
    }
};
