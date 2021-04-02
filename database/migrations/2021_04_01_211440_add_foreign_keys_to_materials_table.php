<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->foreign('category_id', 'fk_materials_categories1')->references('id')->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('materials_id', 'fk_materials_materials1')->references('id')->on('materials')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('medida_unity', 'fk_materials_medidas1')->references('id')->on('medidas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->dropForeign('fk_materials_categories1');
            $table->dropForeign('fk_materials_materials1');
            $table->dropForeign('fk_materials_medidas1');
        });
    }
}
