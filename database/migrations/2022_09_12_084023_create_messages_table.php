<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('house_id')->constrained();

            // $table->string('contact_name', 20);
            // $table->string('lastname', 20);
            // $table->string('email', 256);
            // $table->text('request_text');

            $table->string('name');
            $table->string('email', 256);
            $table->string('message', 8000);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
