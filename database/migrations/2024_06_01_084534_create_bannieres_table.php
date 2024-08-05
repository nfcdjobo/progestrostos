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
        Schema::create('bannieres', function (Blueprint $table) {
            $table->id();

            $table->string('raison_sociale', 255);

            $table->string('email', 255);
            
            $table->string('telephone', 255);

            $table->string('logo', 255)->nullable();

            $table->string('slogan', 255)->nullable();

            $table->double('marge', 8, 2)->default(36);

            $table->string('signature', 255)->nullable();

            $table->string('facebook', 255)->nullable();

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // Personnalisation de la colonne de création

            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Personnalisation de la colonne de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bannieres');
    }
};
