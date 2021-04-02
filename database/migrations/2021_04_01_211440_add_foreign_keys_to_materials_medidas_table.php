<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaterialsMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materials_medidas', function (Blueprint $table) {
            $table->foreign('material_id', 'fk_medidas_has_materials_materials1')->references('id')->on('materials')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('medida_id', 'fk_medidas_has_materials_medidas1')->references('id')->on('medidas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materials_medidas', function (Blueprint $table) {
            $table->dropForeign('fk_medidas_has_materials_materials1');
            $table->dropForeign('fk_medidas_has_materials_medidas1');
        });
    }
}
