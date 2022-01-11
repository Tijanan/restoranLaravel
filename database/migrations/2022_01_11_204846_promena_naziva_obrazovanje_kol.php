<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaNazivaObrazovanjeKol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menadzers', function (Blueprint $table) {
            $table->renameColumn('obrazovanje', 'strucna_sprema');
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
            $table->renameColumn('strucna_sprema', 'obrazovanje');
        });
    }
}
