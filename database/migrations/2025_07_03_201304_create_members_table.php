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
        Schema::create('members', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('foto');
            $table->string('cell');
            $table->string('email');
            $table->string('category');
            $table->string('pesquisa');
            $table->string('lattes');
            $table->string('linkedin');
            $table->string('orcid');
            $table->string('link');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
