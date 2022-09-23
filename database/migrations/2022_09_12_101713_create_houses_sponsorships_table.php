<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesSponsorshipsTable extends Migration
{
    public function up()
    {
        Schema::create('house_sponsorship', function (Blueprint $table) {
            $table->foreignId('house_id')->constrained();
            $table->foreignId('sponsorship_id')->constrained();
            $table->dateTime('expire_date')->default('2022-09-24');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_sponsorship');
    }
}
