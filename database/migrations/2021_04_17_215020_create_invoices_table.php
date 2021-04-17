<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->timestamp('depreciated_at')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable()->index('invoice_cliente_idx');
            $table->double('total_price')->nullable();
            $table->integer('total_materials')->nullable();
            $table->unsignedBigInteger('processed_by')->nullable();
            $table->timestamps();
            $table->string('client_name')->nullable();
            $table->string('order_code')->nullable();
            $table->unsignedBigInteger('status_id')->index('invoice_statuses_idx');
            $table->unsignedBigInteger('payment_type')->index('invoice_payments_idx');
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
    }
}
