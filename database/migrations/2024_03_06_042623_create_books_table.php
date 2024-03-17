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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("category_id")->unsigned();
            $table->bigInteger("bookshelf_id")->unsigned();
            $table->string("isbn", 25)->unique();
            $table->string("cover", 255)->nullable();
            $table->string("title", 255);
            $table->longtext("description");
            $table->string("author", 255);
            $table->string("publisher", 255);
            $table->string("publish_year");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
