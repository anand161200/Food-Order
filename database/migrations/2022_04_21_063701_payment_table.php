<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class PaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('Payment_table', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->integer('amount');
            $table->date('order_date')->default(Carbon::now());;
            $table->string('address');
            $table->bigInteger('contact_number');
            $table->string('payment_method')->default('online');
            $table->string('Name_of_card');
            $table->bigInteger('Credit_card_number');
            $table->integer('Expiration');
            $table->integer('CVV');
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
