<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzbaciPlatuMenadzer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menadzers', function (Blueprint $table) {
            $table->dropColumn('plata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menadzers', function (Blueprint $table) {
            $table->after('strucna_sprema', function ($table) {
                $table->integer('plata');
            });
        });
    }
}
