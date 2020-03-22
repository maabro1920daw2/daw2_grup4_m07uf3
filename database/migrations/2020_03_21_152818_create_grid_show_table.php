<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGridShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grid_show', function (Blueprint $table) {
            $table->id();
            $table->foreignId('showId');
            $table->foreignId('gridId');
            $table->foreign('showId')->references('showId')->on('shows')->onDelete('cascade');
            $table->foreign('gridId')->references('gridId')->on('grids')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grid_show');
    }
}
