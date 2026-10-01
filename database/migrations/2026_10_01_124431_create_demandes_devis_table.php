<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 // database/migrations/xxxx_create_demandes_devis_table.php
public function up(): void
{
    Schema::create('demandes_devis', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('entreprise')->nullable();
        $table->string('email');
        $table->string('telephone', 30);
        $table->foreignId('secteur_id')->nullable()->constrained('secteurs')->nullOnDelete();
        $table->string('service');                    // inbound / outbound / les-deux / autre
        $table->string('volume')->nullable();         // volume d'appels approximatif
        $table->text('message')->nullable();
        $table->string('statut')->default('nouveau'); // nouveau / contacté / gagné / perdu
        $table->ipAddress('ip')->nullable();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('demandes_devis');
}
};
