<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('post_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->longText('content')->nullable();
            $table->unique(['post_id','locale']);
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_translations');
    }
};
