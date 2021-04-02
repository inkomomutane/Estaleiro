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
            $table->foreign('status_id', 'fk_invoices_statuses1')->references('id')->on('statuses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('cliente_id', 'fk_invoices_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('processed_by', 'fk_invoices_users2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
            $table->dropForeign('fk_invoices_statuses1');
            $table->dropForeign('fk_invoices_users1');
            $table->dropForeign('fk_invoices_users2');
        });
    }
}
