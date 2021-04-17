<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('cliente_id', 'invoice_cliente')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('payment_type', 'invoice_payments')->references('id')->on('payments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('status_id', 'invoice_statuses')->references('id')->on('statuses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign('invoice_cliente');
            $table->dropForeign('invoice_payments');
            $table->dropForeign('invoice_statuses');
        });
    }
}
