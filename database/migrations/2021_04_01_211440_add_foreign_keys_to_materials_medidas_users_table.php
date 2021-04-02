<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaterialsMedidasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materials_medidas_users', function (Blueprint $table) {
            $table->foreign('material_medida_id', 'fk_materials_medidas_has_users_materials_medidas1')->references('id')->on('materials_medidas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('user_id', 'fk_materials_medidas_has_users_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('invoice_id', 'fk_materials_medidas_users_invoices1')->references('id')->on('invoices')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materials_medidas_users', function (Blueprint $table) {
            $table->dropForeign('fk_materials_medidas_has_users_materials_medidas1');
            $table->dropForeign('fk_materials_medidas_has_users_users1');
            $table->dropForeign('fk_materials_medidas_users_invoices1');
        });
    }
}
