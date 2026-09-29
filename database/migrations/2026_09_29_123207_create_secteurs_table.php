<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_create_secteurs_table.php
public function up(): void
{
    Schema::create('secteurs', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('slug')->unique();
        $table->string('icone')->default('briefcase');   // nom d'icône Lucide
        $table->string('description_courte', 255);
        $table->text('description')->nullable();
        $table->json('services')->nullable();            // ce qu'on fait pour ce secteur
        $table->json('avantages')->nullable();
        $table->unsignedInteger('ordre')->default(0);
        $table->boolean('is_active')->default(true);
        $table->string('meta_title')->nullable();
        $table->string('meta_description', 255)->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secteurs');
    }
};
