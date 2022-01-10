<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajObrazovanjeMenadzer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menadzers', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->string('obrazovanje');
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
        Schema::table('menadzers', function (Blueprint $table) {
            $table->dropColumn('obrazovanje');
        });
    }
}
