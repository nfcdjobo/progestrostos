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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('stocke_id');
            $table->foreign('stocke_id')->references('id')->on('stockes')->onDelete('cascade');

            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');

            $table->string('name', 100);
            $table->string('reference')->unique();
            $table->integer('quantite');


            $table->double('prix_achat');
            $table->double('frais_divers');

            $table->double('prix_achat_unitaire');
            $table->double('depense_combinee');
            $table->double('prix_vente_unitaire');
            $table->double('prix_vente_totale');
            $table->double('revenu_unitaire');
            $table->double('revenu');


            $table->enum('etat', ['ACTIF', 'INACTIF'])->default('ACTIF');
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
        Schema::dropIfExists('articles');
    }
};
