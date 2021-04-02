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
            $table->bigInteger('id', true);
            $table->timestamp('deprecat_at')->nullable();
            $table->bigInteger('cliente_id')->nullable()->index('fk_invoices_users1_idx');
            $table->double('total_price')->nullable();
            $table->integer('total_materials')->nullable();
            $table->bigInteger('processed_by')->nullable()->index('fk_invoices_users2_idx');
            $table->timestamps();
            $table->bigInteger('status_id')->default(3)->index('fk_invoices_statuses1_idx');
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
