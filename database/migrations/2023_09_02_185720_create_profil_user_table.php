<?php

use App\Models\Profil;
use App\Models\User;
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
        Schema::create('profil_user', function (Blueprint $table) {
            $table->primary(['user_id', 'profil_id']);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Profil::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_user');
    }
};
