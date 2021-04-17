<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCashInflowOutflowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cash_inflow_outflow', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('inflow_outflow_type_id', 'inflow_unflow_types')->references('id')->on('inflow_outflow_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('invoice_id', 'invonces')->references('id')->on('invoices')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('payment_type', 'payments')->references('id')->on('payments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cash_inflow_outflow', function (Blueprint $table) {
            $table->dropForeign('inflow_unflow_types');
            $table->dropForeign('invonces');
            $table->dropForeign('payments');
        });
    }
}
