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
        Schema::create('dispatchers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('espace_id')->nullable();
            $table->foreign('espace_id')->references('id')->on('espaces')->onDelete('cascade');

            $table->unsignedBigInteger('repas_id')->nullable();
            $table->foreign('repas_id')->references('id')->on('repas')->onDelete('cascade');

            $table->json('detail');

            $table->double('montant');

            $table->date('date');

            $table->boolean('etat')->default(true);
            $table->boolean('status')->default(true);

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // Personnalisation de la colonne de création
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Personnalisation de la colonne de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispatchers');
    }
};
