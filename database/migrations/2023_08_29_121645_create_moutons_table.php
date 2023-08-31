<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('moutons', function (Blueprint $table) {
            $table->id('id_mouton');
            $table->string('nom_mouton');
            $table->decimal('prix');
            $table->string('généalogie');
            $table->string('race');
            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')->references('id_personne')->on('personnes')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moutons');
    }
};
