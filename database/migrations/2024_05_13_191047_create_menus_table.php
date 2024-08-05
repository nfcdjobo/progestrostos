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
    const STATUS_EN_ATTENTE = 'EN ATTENTE';

    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('repas_id');
            $table->foreign('repas_id')->references('id')->on('repas')->onDelete('cascade');
            $table->date('date');
            $table->json('details');
            $table->string('reference', 50);
            $table->enum('etat', [self::STATUS_EN_ATTENTE, 'OUVERT', 'FERMER'])->default(self::STATUS_EN_ATTENTE);
            $table->enum('status', [self::STATUS_EN_ATTENTE, 'OUVERT', 'FERMER'])->default(self::STATUS_EN_ATTENTE);

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // Personnalisation de la colonne de création
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Personnalisation de la colonne de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
