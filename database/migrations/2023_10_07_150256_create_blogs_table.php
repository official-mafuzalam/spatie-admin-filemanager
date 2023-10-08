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
            $table->integer('status')->default(0);
            $table->string('blog_id');
            $table->longText('title');
            $table->longText('img_link');
            $table->longText('content');
            $table->longText('keyword');
            $table->string('author');
            $table->string('author_link');
            $table->string('date');
            $table->string('inserter_name');
            $table->string('inserter_email');
            $table->timestamps();
            $table->softDeletes();
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
