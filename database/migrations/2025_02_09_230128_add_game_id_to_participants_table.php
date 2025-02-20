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
    Schema::table('competition_participants', function (Blueprint $table) {
        $table->unsignedBigInteger('game_id')->nullable(); // Ajouter une colonne game_id
        $table->foreign('game_id')->references('id')->on('games')->onDelete('set null'); // Définir une clé étrangère
    });
}

public function down()
{
    Schema::table('competition_participants', function (Blueprint $table) {
        $table->dropForeign(['game_id']); // Supprimer la clé étrangère
        $table->dropColumn('game_id'); // Supprimer la colonne
    });
}

};
