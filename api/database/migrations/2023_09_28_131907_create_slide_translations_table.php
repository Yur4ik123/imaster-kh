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
        Schema::create('slide_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('slide_id');
            $table->string('locale')->index();
            $table->string('header');
            $table->longText('subheader')->nullable();
            $table->unique(['slide_id','locale']);
            $table->foreign('slide_id')->references('id')->on('slides')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slide_translations');
    }
};
