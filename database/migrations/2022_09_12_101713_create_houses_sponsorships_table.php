<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesSponsorshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses_sponsorships', function (Blueprint $table) {
            $table->foreignId('houses_id')->constrained();
            $table->foreignId('sponsorships_id')->constrained();
            $table->dateTime('expire_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses_sponsorships');
    }
}
