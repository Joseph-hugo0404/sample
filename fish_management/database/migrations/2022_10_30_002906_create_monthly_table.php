<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_month');
            $table->Integer('transaction_year');
            $table->Integer('tilapia');
            $table->Integer('ornamental');
            $table->Integer('carp');
            $table->Integer('beetle_fish');
            $table->Integer('cat_fish');
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
        Schema::dropIfExists('monthly');
    }
}
