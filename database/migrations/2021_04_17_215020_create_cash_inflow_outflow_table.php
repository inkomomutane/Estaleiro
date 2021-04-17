<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashInflowOutflowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_inflow_outflow', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('payment_type')->index('payments_idx');
            $table->timestamps();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('inflow_outflow_type_id')->index('inflow_unflow_types_idx');
            $table->double('amount')->nullable();
            $table->unsignedBigInteger('invoice_id')->index('invonces_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash_inflow_outflow');
    }
}
