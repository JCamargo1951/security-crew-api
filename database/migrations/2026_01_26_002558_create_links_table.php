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
        Schema::create('links', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->string('title');
            $table->text('url');
            $table->string('shortener_url')->unique();
            $table->string('slug');
            $table->enum('visibility', ['public', 'private'])->default('public');
            $table->string('password')->nullable();
            $table->timestamp('expires_at')->nullable();

            $table->foreignUuid('user_id')
                ->constrained()
                ->cascadeOnDelete();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
