<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/xxxx_create_message_contacts_table.php
public function up(): void
{
    Schema::create('message_contacts', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('email');
        $table->string('telephone', 30)->nullable();
        $table->string('societe')->nullable();
        $table->string('service')->nullable();
        $table->text('message');
        $table->boolean('lu')->default(false);
        $table->ipAddress('ip')->nullable();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('message_contacts');
}
};
