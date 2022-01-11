<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaKuhinjaKuvar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kuvars', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->string('kuhinja');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kuvars', function (Blueprint $table) {
            $table->dropColumn('kuhinja');
        });
    }
}
