<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_transaction', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('contact_number');
            $table->string('transaction_date');
            $table->Integer('tilapia');
            $table->Integer('total_price_tilapia');
            $table->Integer('ornamental');
            $table->Integer('total_price_ornamental');
            $table->Integer('carp');
            $table->Integer('total_price_carp');
            $table->Integer('beetle_fish');
            $table->Integer('total_price_beetle_fish');
            $table->Integer('cat_fish');
            $table->Integer('total_price_cat_fish');
            $table->string('type');
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
        Schema::dropIfExists('all_transaction');
    }
}
