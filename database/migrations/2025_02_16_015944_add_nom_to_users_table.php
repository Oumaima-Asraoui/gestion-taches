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
        $table->string('nom');  // Ajouter la colonne 'nom'
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('nom');  // Supprimer la colonne 'nom'
    });
}

};
