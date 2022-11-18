<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price', function (Blueprint $table) {
            $table->id();
            $table->Integer('tilapia');
            $table->Integer('tilapia_stock');
            $table->Integer('ornamental');
            $table->Integer('ornamental_stock');
            $table->Integer('carp');
            $table->Integer('carp_stock');
            $table->Integer('beetle_fish');
            $table->Integer('beetle_fish_stock');
            $table->Integer('cat_fish');
            $table->Integer('cat_fish_stock');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price');
    }
}
