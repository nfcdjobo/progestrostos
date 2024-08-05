<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activite_id');
            $table->foreign('activite_id')->references('id')->on('activites')->onDelete('cascade');
            $table->unsignedBigInteger('coordinateur');
            $table->foreign('coordinateur')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('tresorier');
            $table->foreign('tresorier')->references('id')->on('users')->onDelete('cascade');
            $table->string('reference', 20)->uniqid();
            $table->string('titre', 255);
            $table->json('detail');

            $table->enum('etat', ['EN ATTENTE', 'VALIDER', 'CONFIRMER'])->default('EN ATTENTE');
            $table->enum('status', ['ACTIF', 'INACTIF'])->default('ACTIF');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // Personnalisation de la colonne de création
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Personnalisation de la colonne de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
