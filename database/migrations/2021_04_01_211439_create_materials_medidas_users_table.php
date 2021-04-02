<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsMedidasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials_medidas_users', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('material_medida_id')->nullable()->index('fk_materials_medidas_has_users_materials_medidas1_idx');
            $table->bigInteger('user_id')->nullable()->index('fk_materials_medidas_has_users_users1_idx');
            $table->float('quantity', 10, 0)->nullable();
            $table->float('descont', 10, 0)->nullable();
            $table->double('final_price')->nullable();
            $table->timestamps();
            $table->bigInteger('invoice_id')->index('fk_materials_medidas_users_invoices1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials_medidas_users');
    }
}
