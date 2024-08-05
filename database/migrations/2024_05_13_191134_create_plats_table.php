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
        Schema::create('plats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activite_id')->nullable();
            $table->foreign('activite_id')->references('id')->on('activites')->onDelete('cascade');

            $table->unsignedBigInteger('menu_id')->nullable();
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');

            $table->unsignedBigInteger('repas_id')->nullable();
            $table->foreign('repas_id')->references('id')->on('repas')->onDelete('cascade');


            $table->string('name', 100);
            $table->date('date');
            $table->integer('quantite');
            $table->double('prix');
            $table->double('prix_total');

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
        Schema::dropIfExists('plats');
    }
};
