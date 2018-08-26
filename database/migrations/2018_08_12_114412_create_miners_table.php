<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miners', function (Blueprint $table) {
            $table->increments('id');
            $table->text('fileno');
            $table->text('mine');
            $table->text('reg');
            $table->text('owner');
            $table->text('contact');
            $table->text('number');
            $table->text('email');
            $table->text('location');
            $table->text('province');
            $table->text('district');
            $table->text('type');
            $table->text('output');
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
        Schema::dropIfExists('miners');
    }
}
