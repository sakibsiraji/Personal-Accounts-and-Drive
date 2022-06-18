<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('date');
            $table->string('month');
            $table->year('year');
            $table->string('country');
            $table->string('record_type');
            $table->string('record_sector');
            $table->longText('record_detail');
            $table->string('currency');
            $table->double('amount_usd')->nullable();
            $table->double('amount_bdt')->nullable();
            $table->mediumText('voucher')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
