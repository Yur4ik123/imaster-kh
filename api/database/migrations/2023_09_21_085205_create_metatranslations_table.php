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
        Schema::create('meta_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('meta_id');
            $table->string('locale');
            $table->string('slug');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->jsonb('robots')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['meta_id', 'locale']);
            $table->unique(['meta_id', 'locale', 'slug']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_translations');
    }
};
