<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportsone', function (Blueprint $table) {
            $table->text('id');
            $table->text('mine');
            $table->text('ton');
            $table->text('bfine');
            $table->text('percent');
            $table->text('bgross');
            $table->text('receipt');
            $table->text('agency');
            $table->text('comment');
            $table->text('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportsone');
    }
}
