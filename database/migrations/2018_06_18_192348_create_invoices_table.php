<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->string('description');
            $table->string('price');
            $table->integer('quantity');
            $table->string('total');
            $table->timestamps();
        });

        Schema::create('customer_invoice', function (Blueprint $table) {
            $table->integer('customer_id');
            $table->integer('invoice_id');
            $table->primary(['customer_id', 'invoice_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('customer_invoice');
    }
}
