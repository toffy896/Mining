<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updates', function (Blueprint $table) {
            $table->increments('id');
            $table->text('mine');
            $table->text('reg');
            $table->text('s1milled');
            $table->text('s2milled');
            $table->text('bfine');
            $table->text('percent');
            $table->text('bgross');
            $table->text('receipt');
            $table->text('agency');
            $table->text('status');
            $table->text('amount');
            $table->text('goldsold');
            $table->text('comment');
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
        Schema::dropIfExists('updates');
    }
}
