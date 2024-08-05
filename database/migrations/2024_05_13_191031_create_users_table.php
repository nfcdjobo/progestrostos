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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('fullname', 100);
            $table->string('telephone', 50)->nullable();
            $table->string('email', 255)->unique();
            $table->date('date_prise_de_fonction')->nullable();
            $table->string('residence')->nullable();

            $table->unsignedBigInteger('departement_id')->nullable();
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');

            $table->unsignedBigInteger('espace_id')->nullable();
            $table->foreign('espace_id')->references('id')->on('espaces')->onDelete('cascade');

            $table->enum('etat', ['ACTIF', 'INACTIF'])->default('ACTIF');
            $table->enum('status', ['ACTIF', 'INACTIF'])->default('ACTIF');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // Personnalisation de la colonne de création
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Personnalisation de la colonne de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
