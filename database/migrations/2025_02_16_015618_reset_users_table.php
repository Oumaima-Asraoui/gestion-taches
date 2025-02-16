<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        // Suppression de toutes les colonnes existantes
        $table->dropColumn([
            'nom', 
            'prenom', 
            'email', 
            'password', 
            'remember_token', 
            'created_at', 
            'updated_at',
            // Ajoute ici toutes les colonnes que tu veux supprimer
        ]);

        // Ajout des nouvelles colonnes
        $table->string('nom');  // Nom
        $table->string('prenom');  // Prénom
        $table->string('email')->unique();  // Email
        $table->string('password');  // Mot de passe
        $table->timestamps();  // Les colonnes created_at et updated_at
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        // Rétablir les colonnes supprimées si tu fais un rollback
        $table->string('nom');
        $table->string('prenom');
        $table->string('email');
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    });
}

};
