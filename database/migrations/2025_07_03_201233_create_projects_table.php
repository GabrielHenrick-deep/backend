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
            Schema::create('projects', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description');
                $table->longText('long_description');
                $table->string('category');
                $table->json('tags');
                $table->string('image_url');
                $table->string('demo_url')->nullable();
                $table->string('github_url')->nullable();
                $table->enum('status', ['completed', 'in-progress', 'planning']);
                $table->date('start_date');
                $table->date('completion_date')->nullable();
                // ❌ REMOVA ESSA LINHA:
                // $table->json('team');
                $table->json('technologies');
                $table->json('features');
                $table->json('challenges');
                $table->json('outcomes');
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
