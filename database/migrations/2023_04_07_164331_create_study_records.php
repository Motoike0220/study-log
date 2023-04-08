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
        Schema::create('study_records', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->tinyInteger('categoly_id');
            $table->tinyInteger('user_id');
            $table->text('content');
            $table->time('duration')->nullable();
            $table->tinyInteger('status')->nullable();;
            $table->tinyInteger('tag_id')->nullable();;
            $table->time('start_time')->nullable();;
            $table->time('end_time')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_records');
    }
};
