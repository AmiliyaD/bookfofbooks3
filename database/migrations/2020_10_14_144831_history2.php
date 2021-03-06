<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class History2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('history2', function (Blueprint $table) {
            $table->string('autor');
            $table->increments('user_id');
            $table->string('title');
            $table->text('text');
            $table->string('status')->nullable();
            $table->string('genre');
            $table->string('likes')->nullable();
            $table->timestamp('created_at')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
