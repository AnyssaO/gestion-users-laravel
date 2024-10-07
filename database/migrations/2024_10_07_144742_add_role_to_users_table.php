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
            //default = la value par défaut
            $table->string('role')->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    // fonction de rollback pour annuler la migration (note: pas conseillé car bug souvent)
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
