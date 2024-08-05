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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('vent_id')->nullable();

            $table->foreign('vent_id')->references('id')->on('ventes')->onDelete('cascade');

            $table->double('montant');

            $table->double('profile');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // Personnalisation de la colonne de création

            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Personnalisation de la colonne de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
